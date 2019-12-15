<!-- The Modal -->
<div class="modal" id="modalReview">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">@php pll_e('Оставить отзыв','sage'); @endphp</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->

      <div class="modal-body ">
        <div class="container">
          <div class="review-form">
            @php
              $defaults = array(
    'fields'               => array(
                                'author' => '<p class="comment-form-author">' . '<label for="author">' . pll__( 'Ваше имя' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                                      '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="'.pll__( 'Введите Ваше имя*','sage' ).'" size="30"' . $aria_req . $html_req . ' /></p>',
                                'email'  => '',
                                ),
    'comment_field'        => '<p class="comment-form-comment"><label for="comment">' . pll__( 'Отзыв' ) . '</label> <textarea id="comment" placeholder="'.pll__( 'Введите Ваш текст здесь','sage' ).'"  name="comment" cols="45" rows="8"  aria-required="true" required="required"></textarea></p>',
    'must_log_in'          => '',
    'logged_in_as'         => '',
    'comment_notes_before' => '',
    'comment_notes_after'  => '',
    'id_form'              => 'commentform',
    'id_submit'            => 'submit',
    'class_form'           => 'comment-form',
    'class_submit'         => 'submit',
    'name_submit'          => 'submit',
    'title_reply'          => __( '' ),
    'title_reply_to'       => __( 'Leave a Reply to %s' ),
    'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
    'title_reply_after'    => '</h3>',
    'cancel_reply_before'  => ' <small>',
    'cancel_reply_after'   => '</small>',
    'cancel_reply_link'    => __( 'Cancel reply' ),
    'label_submit'         => pll__( 'Отправить' ),
    'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="button-red button-review-post my-2 px-3 py-2 %3$s" value="%4$s" />',
    'submit_field'         => '<p class="form-submit">%1$s %2$s</p>',
    'format'               => 'xhtml',
  );

  comment_form( $defaults );
            @endphp
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
