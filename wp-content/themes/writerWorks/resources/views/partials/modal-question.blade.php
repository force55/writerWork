<!-- The Modal -->
<div class="modal" id="modalQuestion">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">@php pll_e('Задать вопрос','sage'); @endphp</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->

      <div class="modal-body ">
        <div class="container">
          <div class="review-form">
            <form action="#" method="post">
              <div class="form-group comment-form">
                <label for="name_question">{!! pll_e('Ваше имя','sage') !!}</label>
                <input type="text" value="" name="name_question">
              </div>
              <div class="form-group comment-form">
                <label for="name_question">{!! pll_e('Номер телефона','sage') !!}</label>
                <input type="text" value="" name="phone_question">
              </div>
              <div class="form-group comment-form">
                <label for="name_question">{!! pll_e('Ваш e-mail','sage') !!}</label>
                <input type="email" value="" name="email_question">
              </div>
              <div class="form-group comment-form">
                <label for="name_question">{!! pll_e('Ваш вопрос','sage') !!}</label>
                <textarea type="text" value="" name="text_question">
                </textarea>
              </div>
              <div class="comment-form">
                <p class="form-submit"><input type="submit" value="{!! pll_e('ОТПРАВИТЬ','sage') !!}"></p>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
