function ptt_bulk_edit() {
	var $ = jQuery;
	var _edit = inlineEditPost.edit;
	$( '#bulk-edit' ).find( '.inline-edit-col-right .inline-edit-col' ).append( $('#bulk-edit #ptt_bulk_edit' ) );
	$( '.inline-edit-row' ).not( '#bulk-edit' ).find( '.inline-edit-col-right .inline-edit-col' ).append( $( '.inline-edit-row #ptt_bulk_edit' ) );
	
	inlineEditPost.edit = function( id ) {
		var args = [].slice.call( arguments );
		_edit.apply( this, args );
		if ( typeof( id ) === 'object' ) {
			id = this.getId( id );
		}
		var
			// edit_row is the quick-edit row, containing the inputs that need to be updated
			edit_row   = $( '#edit-' + id ),
			// post_row is the row shown when a book isn't being edited, which also holds the existing values.
			post_row   = $( '#post-' + id ),
			// get the existing values
			post_type = $( 'td.post_type span', post_row ).data( 'post-type' );
			// set the values in the quick-editor
			$( 'select[name="post_type_transfer_types"] option[value="' + post_type + '"]', edit_row ).attr( 'selected', 'selected' );
	};
}
// Another way of ensuring inlineEditPost.edit isn't patched until it's defined
if ( inlineEditPost ) {
	ptt_bulk_edit();
} else {
	jQuery( ptt_bulk_edit );
}