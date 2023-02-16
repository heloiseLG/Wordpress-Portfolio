(function() {
	tinymce.PluginManager.add('bonjour_mce_button', function( editor, url ) {
		editor.addButton( 'bonjour_mce_button', {
			icon: 'bonjour-icon',
            tooltip: 'Grid Shortcodes',
			type: 'menubutton',
			menu: [
				{
				    text: 'Two halfs',
				    onclick: function() {
				    	editor.insertContent('[bnjr_row]<br/>[bnjr_column size="half"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="half"]<br/>Your content here<br/>[/bnjr_column]<br/>[/bnjr_row]');
				    },
                },
                {
				    text: 'Three thirds',
				    onclick: function() {
				    	editor.insertContent('[bnjr_row]<br/>[bnjr_column size="third"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="third"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="third"]<br/>Your content here<br/>[/bnjr_column]<br/>[/bnjr_row]');
				    },
                },
                {
				    text: 'One third & two thirds',
				    onclick: function() {
				    	editor.insertContent('[bnjr_row]<br/>[bnjr_column size="third"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="two-thirds"]<br/>Your content here<br/>[/bnjr_column]<br/>[/bnjr_row]');
				    },
                },
                {
				    text: 'Two thirds & a third',
				    onclick: function() {
				    	editor.insertContent('[bnjr_row]<br/>[bnjr_column size="two-thirds"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="third"]<br/>Your content here<br/>[/bnjr_column]<br/>[/bnjr_row]');
				    },
                },
                {
				    text: 'Four quarters',
				    onclick: function() {
				    	editor.insertContent('[bnjr_row]<br/>[bnjr_column size="quarter"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="quarter"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="quarter"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="quarter"]<br/>Your content here<br/>[/bnjr_column]<br/>[/bnjr_row]');
				    },
                },
                {
				    text: 'A half & two quarters',
				    onclick: function() {
				    	editor.insertContent('[bnjr_row]<br/>[bnjr_column size="half"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="quarter"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="quarter"]<br/>Your content here<br/>[/bnjr_column]<br/>[/bnjr_row]');
				    },
                },
                {
				    text: 'Two quarters & a half',
				    onclick: function() {
				    	editor.insertContent('[bnjr_row]<br/>[bnjr_column size="quarter"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="quarter"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="half"]<br/>Your content here<br/>[/bnjr_column]<br/>[/bnjr_row]');
				    },
                },
                {
				    text: 'Three quarters & a quarter',
				    onclick: function() {
				    	editor.insertContent('[bnjr_row]<br/>[bnjr_column size="three-quarters"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="quarter"]<br/>Your content here<br/>[/bnjr_column]<br/>[/bnjr_row]');
				    },
                },
                {
				    text: 'A quarter & three quarters',
				    onclick: function() {
				    	editor.insertContent('[bnjr_row]<br/>[bnjr_column size="quarter"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="three-quarters"]<br/>Your content here<br/>[/bnjr_column]<br/>[/bnjr_row]');
				    },
                },

                {
				    text: 'popup',
				   	onclick: function() {
					    editor.windowManager.open( {
					        title: 'Insert header tag',
					        body: [{
					            type: 'textbox',
					            name: 'title',
					            label: 'Text AlignSSS'
					        },
					        {
					            type: 'textbox',
					            name: 'id',
					            label: 'Header anchor'
					        },
					        {
					            type: 'listbox', 
					            name: 'level', 
					            label: 'Bonjour Grid', 
					            'values': [
					                {text: 'Two halfs', value: '3'},
					                {text: 'Three thirds', value: '4'},
					                {text: 'One third & two thirds', value: '5'},
					                {text: 'Two thirds & a third', value: '6'}
					                {text: 'Four quarters', value: '6'}
					                {text: 'A half & two quarters', value: '6'}
					                {text: 'Two quarters & a half', value: '6'}
					                {text: 'Three quarters & a quarter', value: '6'}
					                {text: 'A quarter & three quarters', value: '6'}

					            ]
					        }],
					        onsubmit: function( e ) {
					            editor.insertContent( '&lt;h' + e.data.level + ' id="' + e.data.id + '"&gt;' + e.data.title + '&lt;/h' + e.data.level + '&gt;');
					        }
					    });
					}
				},
			]
		});
	});
})();