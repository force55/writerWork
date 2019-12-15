<!-- The Modal -->
<div class="modal" id="orderModal">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">@php pll_e('Форма заказа','sage'); @endphp</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->

        <div class="modal-body ">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-8">
                <form action="#" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="form-group comment-form">
                        <label for="name_question">{!! pll_e('Ваше имя','sage') !!}</label>
                        <input type="text" value="" name="name_question">
                      </div>

                      <div class="form-group comment-form">
                        <label for="phone_question">{!! pll_e('Номер телефона','sage') !!}</label>
                        <input type="text" value="" name="phone_question">
                      </div>

                      <div class="form-group comment-form">
                        <label for="email_question">{!! pll_e('Ваш e-mail','sage') !!}</label>
                        <input type="email" value="" name="email_question">
                      </div>

                      <div class="form-group comment-form">
                        <label for="vid_raboti">{!! pll_e('Вид работы','sage') !!}</label>
                        <div class="custom-select">
                          <select name="vid_raboti" id="vid_raboti">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group comment-form">
                        <label for="name_question">{!! pll_e('Тема работы','sage') !!}</label>
                        <input type="text" value="" name="topic_work">
                      </div>

                      <div class="form-group comment-form">
                        <label for="name_question">{!! pll_e('Предмет','sage') !!}</label>
                        <input type="text" value="" name="predmet">
                      </div>

                      <div class="form-group comment-form">
                        <label for="name_question">{!! pll_e('Прикрепить файл','sage') !!}</label>
                        <div class="form-group files">
                          <input id="order_file" type="file" class="form-control" multiple="">
                          <div class="file-name" style="display: none;">
                            <span id="clear_file" class="clear"><img src="@asset('images/clear_button.png')" alt=""></span>
                            <p class="name"></p>
                          </div>
                          <div class="img-block-file-upload">
                            <img src="@asset('images/upload.png')" alt="">
                            <p>Загрузите файл</p>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-12 col-md-6">

                      <div class="form-group comment-form">
                        <label for="name_question">{!! pll_e('Дата выполнения','sage') !!}</label>
                        <input type="date" value="" name="date_result">
                      </div>

                      <div class="form-group comment-form">
                        <label for="name_question">{!! pll_e('Уникальность, %','sage') !!}</label>
                        <input type="text" value="" name="unique">
                      </div>
                      <div class="form-group comment-form">
                        <label for="name_question">{!! pll_e('Объем работы','sage') !!}</label>
                        <input type="text" value="" name="obiem_work">
                      </div>

                      <div class="form-group comment-form">
                        <label for="name_question">{!! pll_e('Дополнительная информация','sage') !!}</label>
                        <textarea name="additional_text"></textarea>
                      </div>

                      <input type="submit btn button-red" hidden='true' value="{!! pll_e('ОТПРАВИТЬ','sage') !!}">
                      <button class="btn button-red">{!! pll_e('ОТПРАВИТЬ','sage') !!}</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-12 col-md-4">
                <p class="title-block-modal">
                  Средняя стоимость
                </p>
                <p>Это примерный просчет стоимости,
                  сумма может поменяться после
                  оценки заказа
                </p>
                <p class="price">
                  3500 грн
                </p>
                <p class="title-ul">
                  Что влияет на стоимость:
                </p>
                <ul class="ul-modal">
                  <li>сложность темы</li>
                  <li>сложность темы</li>
                  <li>сложность темы</li>
                </ul>
                <p>
                  Точную стоимость и условия
                  сотрудничества Вам озвучит
                  наш менеджер после оценки
                  заказа авторами
                </p>
              </div>
            </div>
        </div>
        </div>

    </div>
  </div>
</div>
