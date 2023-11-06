<?php
  /****** Add Custom Media Field ******/
  function miraupbd_add_media_svg_field( $form_fields, $post ) {
    $field_value = get_post_meta( $post->ID, 'svg_media_file', true );
    $form_fields['svg_media_file'] = array( 
      'value' => $field_value ? $field_value : '',
      'label' => 'Link SVG',
      'input'  => 'text'
    );
    return $form_fields;
  }
  function miraupbd_add_media_ai_field( $form_fields, $post ) {
    $field_value = get_post_meta( $post->ID, 'ai_media_file', true );
    $form_fields['ai_media_file'] = array( 
      'value' => $field_value ? $field_value : '',
      'label' => 'Link AI',
      'input'  => 'text'
    );
    return $form_fields;
  }
  function miraupbd_add_media_eps_field( $form_fields, $post ) {
    $field_value = get_post_meta( $post->ID, 'eps_media_file', true );
    $form_fields['eps_media_file'] = array( 
      'value' => $field_value ? $field_value : '',
      'label' => 'Link EPS',
      'input'  => 'text'
    );
    return $form_fields;
  }
  function miraupbd_add_media_json_field( $form_fields, $post ) {
    $field_value = get_post_meta( $post->ID, 'json_media_file', true );
    $form_fields['json_media_file'] = array( 
      'value' => $field_value ? $field_value : '',
      'label' => 'Link JSON',
      'input'  => 'text'
    );
    return $form_fields;
  }
  function miraupbd_add_media_png_field( $form_fields, $post ) {
    $field_value = get_post_meta( $post->ID, 'png_media_file', true );
    $form_fields['png_media_file'] = array( 
      'value' => $field_value ? $field_value : '',
      'label' => 'Link PNG',
      'input'  => 'text'
    );
    return $form_fields;
  }
  function miraupbd_add_media_jpg_field( $form_fields, $post ) {
    $field_value = get_post_meta( $post->ID, 'jpg_media_file', true );
    $form_fields['jpg_media_file'] = array( 
      'value' => $field_value ? $field_value : '',
      'label' => 'Link JPG',
      'input'  => 'text'
    );
    return $form_fields;
  }
  function miraupbd_add_media_gif_field( $form_fields, $post ) {
    $field_value = get_post_meta( $post->ID, 'gif_media_file', true );
    $form_fields['gif_media_file'] = array( 
      'value' => $field_value ? $field_value : '',
      'label' => 'Link GIF',
      'input'  => 'text'
    );
    return $form_fields;
  }
  function miraupbd_add_media_mp4_field( $form_fields, $post ) {
    $field_value = get_post_meta( $post->ID, 'mp4_media_file', true );
    $form_fields['mp4_media_file'] = array( 
      'value' => $field_value ? $field_value : '',
      'label' => 'Link MP4',
      'input'  => 'text'
    );
    return $form_fields;
  }
  function miraupbd_add_media_ae_field( $form_fields, $post ) {
    $field_value = get_post_meta( $post->ID, 'ae_media_file', true );
    $form_fields['ae_media_file'] = array( 
      'value' => $field_value ? $field_value : '',
      'label' => 'Link AE',
      'input'  => 'text'
    );
    return $form_fields;
  }
  function miraupbd_add_media_fontweb_field( $form_fields, $post ) {
    $field_value = get_post_meta( $post->ID, 'fontweb_media_file', true );
    $form_fields['fontweb_media_file'] = array( 
      'value' => $field_value ? $field_value : '',
      'label' => 'Link Font Web',
      'input'  => 'text'
    );
    return $form_fields;
  }

  add_filter( 'attachment_fields_to_edit', 'miraupbd_add_media_svg_field', null, 2 );
  add_filter( 'attachment_fields_to_edit', 'miraupbd_add_media_ai_field', null, 2 );
  add_filter( 'attachment_fields_to_edit', 'miraupbd_add_media_eps_field', null, 2 );
  add_filter( 'attachment_fields_to_edit', 'miraupbd_add_media_json_field', null, 2 );
  add_filter( 'attachment_fields_to_edit', 'miraupbd_add_media_png_field', null, 2 );
  add_filter( 'attachment_fields_to_edit', 'miraupbd_add_media_jpg_field', null, 2 );
  add_filter( 'attachment_fields_to_edit', 'miraupbd_add_media_gif_field', null, 2 );
  add_filter( 'attachment_fields_to_edit', 'miraupbd_add_media_mp4_field', null, 2 );
  add_filter( 'attachment_fields_to_edit', 'miraupbd_add_media_ae_field', null, 2 );
  add_filter( 'attachment_fields_to_edit', 'miraupbd_add_media_fontweb_field', null, 2 );

  //save your custom media field
  function miraupbd_custom_media_save_attachment( $attachment_id ) {
    if ( isset( $_REQUEST['attachments'][ $attachment_id ]['svg_media_file'] ) ) {
      $svg_media_file = $_REQUEST['attachments'][ $attachment_id ]['svg_media_file'];
      update_post_meta( $attachment_id, 'svg_media_file', $svg_media_file );
    } 
    if ( isset( $_REQUEST['attachments'][ $attachment_id ]['ai_media_file'] ) ) {
      $ai_media_file = $_REQUEST['attachments'][ $attachment_id ]['ai_media_file'];
      update_post_meta( $attachment_id, 'ai_media_file', $ai_media_file );
    } 
    if ( isset( $_REQUEST['attachments'][ $attachment_id ]['eps_media_file'] ) ) {
      $eps_media_file = $_REQUEST['attachments'][ $attachment_id ]['eps_media_file'];
      update_post_meta( $attachment_id, 'eps_media_file', $eps_media_file );
    } 
    if ( isset( $_REQUEST['attachments'][ $attachment_id ]['json_media_file'] ) ) {
      $json_media_file = $_REQUEST['attachments'][ $attachment_id ]['json_media_file'];
      update_post_meta( $attachment_id, 'json_media_file', $json_media_file );
    } 
    if ( isset( $_REQUEST['attachments'][ $attachment_id ]['png_media_file'] ) ) {
      $png_media_file = $_REQUEST['attachments'][ $attachment_id ]['png_media_file'];
      update_post_meta( $attachment_id, 'png_media_file', $png_media_file );
    } 
    if ( isset( $_REQUEST['attachments'][ $attachment_id ]['jpg_media_file'] ) ) {
      $jpg_media_file = $_REQUEST['attachments'][ $attachment_id ]['jpg_media_file'];
      update_post_meta( $attachment_id, 'jpg_media_file', $jpg_media_file );
    } 
    if ( isset( $_REQUEST['attachments'][ $attachment_id ]['gif_media_file'] ) ) {
      $gif_media_file = $_REQUEST['attachments'][ $attachment_id ]['gif_media_file'];
      update_post_meta( $attachment_id, 'gif_media_file', $gif_media_file );
    } 
    if ( isset( $_REQUEST['attachments'][ $attachment_id ]['mp4_media_file'] ) ) {
      $mp4_media_file = $_REQUEST['attachments'][ $attachment_id ]['mp4_media_file'];
      update_post_meta( $attachment_id, 'mp4_media_file', $mp4_media_file );
    } 
    if ( isset( $_REQUEST['attachments'][ $attachment_id ]['ae_media_file'] ) ) {
      $ae_media_file = $_REQUEST['attachments'][ $attachment_id ]['ae_media_file'];
      update_post_meta( $attachment_id, 'ae_media_file', $ae_media_file );
    } 
    if ( isset( $_REQUEST['attachments'][ $attachment_id ]['fontweb_media_file'] ) ) {
      $fontweb_media_file = $_REQUEST['attachments'][ $attachment_id ]['fontweb_media_file'];
      update_post_meta( $attachment_id, 'fontweb_media_file', $fontweb_media_file );
    }
  }
  add_action( 'edit_attachment', 'miraupbd_custom_media_save_attachment' );