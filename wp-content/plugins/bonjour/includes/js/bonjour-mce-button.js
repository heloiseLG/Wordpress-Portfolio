(function() {
	tinymce.PluginManager.add('bonjour_mce_button', function( editor, url ) {
		editor.addButton( 'bonjour_mce_button', {
			icon: 'icon bnjr_icon_icon',
            tooltip: 'Grid Shortcodes',
			 
				   	onclick: function() {
					    editor.windowManager.open( {
					        title: 'Insert header tag',
					        body: [
					        {
					            type: 'listbox', 
					            name: 'grid', 
					            label: 'Bonjour Grid', 
					            'values': [
					                {text: 'Twoo Halfs', value: '1', icon: 'icon bnjr_twoo_halfs_icon'},
					                {text: 'Three thirds', value: '2',icon: 'icon bnjr_three_thirds_icon'},
					                {text: 'One third & two thirds', value: '3', icon: 'icon bnjr_third_twoo_thirds_icon'},
					                {text: 'Two thirds & a third', value: '4', icon: 'icon bnjr_twoo_thirds_third_icon'},
					                {text: 'Four quarters', value: '5', icon: 'icon bnjr_four_q_icon'},
					                {text: 'A half & two quarters', value: '6', icon: 'icon bnjr_half_two_q_icon'},
					                {text: 'Two quarters & a half', value: '7', icon: 'icon bnjr_two_q_half_icon'},
					                {text: 'Three quarters & a quarter', value: '8', icon: 'icon bnjr_three_q_q_icon'},
					                {text: 'A quarter & three quarters', value: '9', icon: 'icon bnjr_q_three_q_icon'},

					            ]
					        },
					        {
					            type: 'listbox', 
					            name: 'align', 
					            label: 'Text align', 
					            'values': [
					                
					                {text: 'Center', value: 'center'},
					                {text: 'Left', value: 'left'},
					                {text: 'Right', value: 'right'}

					            ]
					        }
					        ],
					        onsubmit: function( e ) {
					        	var bnjrGrid = e.data.grid,
					        	align = e.data.align;
					        	switch (bnjrGrid)
									{
									   case "1":
									   		editor.insertContent('[bnjr_row]<br/>[bnjr_column size="half" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="half" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[/bnjr_row]');
									        break;
									   case "2":
									   		editor.insertContent('[bnjr_row]<br/>[bnjr_column size="third" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="third" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="third" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[/bnjr_row]');
									   		break;
									   case "3":
									   		editor.insertContent('[bnjr_row]<br/>[bnjr_column size="third" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="two-thirds" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[/bnjr_row]');
									   		break;
									   case "4":
									   		editor.insertContent('[bnjr_row]<br/>[bnjr_column size="two-thirds" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="third" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[/bnjr_row]');
									   		break;
									   case "5":
									   		editor.insertContent('[bnjr_row]<br/>[bnjr_column size="quarter" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="quarter" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="quarter" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="quarter" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[/bnjr_row]');
									   		break;
									   case "6":
									   		editor.insertContent('[bnjr_row]<br/>[bnjr_column size="half" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="quarter" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="quarter" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[/bnjr_row]');
									   		
									   case "7":
									   		editor.insertContent('[bnjr_row]<br/>[bnjr_column size="quarter" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="quarter" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="half" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[/bnjr_row]');
									   		
									   case "8":
									   		editor.insertContent('[bnjr_row]<br/>[bnjr_column size="three-quarters" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="quarter" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[/bnjr_row]');
									   		break;
									   case "9":
									        editor.insertContent('[bnjr_row]<br/>[bnjr_column size="quarter" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="three-quarters" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[/bnjr_row]');
									        break;
									   default: 
									       editor.insertContent('[bnjr_row]<br/>[bnjr_column size="half" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[bnjr_column size="half" text_align="'+align+'"]<br/>Your content here<br/>[/bnjr_column]<br/>[/bnjr_row]');
									}

					        }
					    });
					}
				 
		});
	});
})();