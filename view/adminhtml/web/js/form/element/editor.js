define([
	'jquery',
	'underscore',
	'Magento_Ui/js/form/element/textarea',
	'../../lib/codemirror',
	'../../mode/css/codemirror-css',
], function ($, _, Textarea, CodeMirror) {
	'use strict';

	var _isMinificationEnabled;

	/**
	 * Make editor resizable.
	 *
	 * @param  {CodeMirror} editor
	 */
	function makeResizable(editor) {
		var wrapperElement = editor.getWrapperElement();

		$(wrapperElement).resizable({
			handles: 's',
			resize: _.debounce(editor.refresh.bind(editor), 100)
		});
		// Make full height on double click.
		$('.ui-resizable-handle', wrapperElement)
			.dblclick(function () {
				editor.setSize(null, editor.doc.height + 12);
				editor.refresh();
			});
	}

	/**
	 * Is CSS minification enabled
	 *
	 * @param  {String}  minficationPostfix
	 * @return {Boolean}
	 */
	function isMinificationEnabled(minficationPostfix) {
		var url;

		if (typeof _isMinificationEnabled === 'undefined') {
			url = document.createElement('a');
			url.href = require.toUrl('');
			_isMinificationEnabled = true;
			$('link[type="text/css"][href^="' + url.origin + '"]').each(function () {
				if ($(this).attr('href').indexOf(minficationPostfix) < 0) {
					_isMinificationEnabled = false;

					return false;
				}
			});
		}

		return _isMinificationEnabled;
	}

	/**
	 * Load Css via related URL
	 *
	 * @param  {String} url
	 */
	function loadCss(url) {
		var link = document.createElement('link');

		if (isMinificationEnabled('.min.css')) {
			url = url.replace('.css', '.min.css');
		}

		link.type = 'text/css';
		link.rel = 'stylesheet';
		link.href = require.toUrl('OH_Theme/' + url);
		document.getElementsByTagName('head')[0].appendChild(link);
	}

	// load CSS for codemirror editor
	_.each([
		'js/lib/codemirror.css',
		'css/editor.css'
	], loadCss);

	return Textarea.extend({
		defaults: {
			elementTmpl: 'OH_Theme/form/element/editor',
			editorConfig: {
				indentUnit: 4,
				lineNumbers: true,
				autoCloseBrackets: true,
				autoCloseTags: true,
				matchTags: {
					bothTags: true
				},
				matchBrackets: true,
				extraKeys: {
					'Ctrl-Space': 'autocomplete',
					'Ctrl-J': 'toMatchingTag'
				}
			}
		},

		/** @inheritdoc */
		initObservable: function () {
			this._super();
			this.value.subscribe(this.setEditorValue.bind(this));

			return this;
		},

		/**
		 * Initialize CodeMirror on textarea.
		 *
		 * @param  {Element} textarea
		 */
		initEditor: function (textarea) {
			var self = this;

			self.editor = CodeMirror.fromTextArea(
				textarea,
				self.editorConfig
			);
			self.editor.on(
				'changes',
				self.listenEditorChanges.bind(self)
			);
			makeResizable(self.editor);
		},

		/**
		 * @param  {Object} editor
		 */
		listenEditorChanges: function (editor) {
			this.value(editor.getValue());
		},

		/**
		 * @param {String} newValue
		 */
		setEditorValue: function (newValue) {
			if (typeof this.editor !== 'undefined' &&
				newValue !== this.editor.getValue()
			) {
				this.editor.setValue(newValue);
			}
		},

		/**
		 * {@inheritdoc}
		 */
		initConfig: function () {
			this._super();

			// Force uid when input id is set in element config.
			if (this.inputId) {
				_.extend(this, {
					uid: this.inputId,
					noticeId: 'notice-' + this.inputId,
					errorId: 'error-' + this.inputId
				});
			}

			return this;
		}
	});
});
