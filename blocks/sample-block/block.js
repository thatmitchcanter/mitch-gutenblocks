( function( wp, $, _ ) {
	var __ = wp.i18n.__;

	wp.blocks.registerBlockType( 'sample-block/sample-block', {
		title: __( 'Sample Block', 'sample-block' ),
		category: 'common',
		icon: 'admin-plugins',
		keywords: [ 'sample' ],

    edit: function edit( props ) {
      var attributes = props.attributes;
			var results = [];

      return wp.element.createElement ( 'p', { class: 'hello-block'}, 'Hello!' );


		},

    save: function save( props ) {

      console.log('Saving!');

		},

	} );

} )( window.wp, window.jQuery, window._ );
