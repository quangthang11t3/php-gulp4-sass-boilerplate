<!-- include header -->
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/header.php'; ?>

    <main class="main">
    	<div class="contact-content">
        <div class="v-contact">
          <div class="u-layout-smaller">
            <div class="c-steps">
              <div class="c-steps__col is-active">
                <span class="c-steps__col__number u-font-rajdhani">1</span>
                <p></p>
                <p class="c-steps__col__label">問い合わせ内容入力</p>
                <p></p>
              </div>
              <div class="c-steps__col">
                <span class="c-steps__col__number u-font-rajdhani">2</span>
                <p></p>
                <p class="c-steps__col__label">内容確認</p>
                <p></p>
              </div>
              <div class="c-steps__col">
                <span class="c-steps__col__number u-font-rajdhani">3</span>
                <p></p>
                <p class="c-steps__col__label">完了</p>
                <p></p>
              </div>
            </div>
            <p class="c-contact__message">お問い合わせご希望の方は下記フォームよりお送り下さい。<br>送信内容を確認させていただき担当よりご連絡致します。</p>
            <div id="mw_wp_form_mw-wp-form-215" class="mw_wp_form mw_wp_form_input  ">
              <form method="post" action="" enctype="multipart/form-data">
                <div class="c-form">
                  <div class="c-form__row"><label for="" class="c-form__row__label"><span class="c-form__row__label__text">お問い合わせ区分</span> <span class="c-form__required">必須</span> </label>
                    <div class="c-form__row__field">
                      <div class="c-form__radio"> <span class="mwform-radio-field horizontal-item">
                          <label>
                            <input type="radio" name="type" value="製品のご相談" class="horizontal-item">
                            <span class="mwform-radio-field-text">製品のご相談</span>
                          </label>
                        </span>
                        <span class="mwform-radio-field horizontal-item">
                          <label>
                            <input type="radio" name="type" value="資料請求" class="horizontal-item">
                            <span class="mwform-radio-field-text">資料請求</span>
                          </label>
                        </span>
                        <input type="hidden" name="__children[type][]" value="{&quot;\u88fd\u54c1\u306e\u3054\u76f8\u8ac7&quot;:&quot;\u88fd\u54c1\u306e\u3054\u76f8\u8ac7&quot;,&quot;\u8cc7\u6599\u8acb\u6c42&quot;:&quot;\u8cc7\u6599\u8acb\u6c42&quot;}">
                      </div>
                    </div>
                  </div>
                  <div class="c-form__row"><label for="product" class="c-form__row__label"><span class="c-form__row__label__text">お問い合わせ種別</span> <span class="c-form__required">必須</span> </label>
                    <p></p>
                    <div class="c-form__row__field">
                      <div class="c-form__select"><select name="product" class="c-form__select__field">
                          <option value="" selected="selected">
                            選択してください </option>
                          <option value="当社事業についてのお問い合わせ">
                            当社事業についてのお問い合わせ </option>
                          <option value="各種工事のご相談">
                            各種工事のご相談 </option>
                          <option value="お見積もりのご依頼">
                            お見積もりのご依頼 </option>
                          <option value="採用に関するお問い合わせ">
                            採用に関するお問い合わせ </option>
                          <option value="その他">
                            その他 </option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="c-form__select__icon">
                          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                        </svg></div>
                      <p></p>
                    </div>
                  </div>
                  <div class="c-form__row"><label for="company" class="c-form__row__label"><span class="c-form__row__label__text">会社名・教室名</span></label>
                    <p></p>
                    <div class="c-form__row__field"><input type="text" name="company" id="company" class="c-form__input" size="60" value="" placeholder="入力してください">
                    </div>
                  </div>
                  <div class="c-form__row"><label for="name" class="c-form__row__label"><span class="c-form__row__label__text">お名前</span> <span class="c-form__required">必須</span> </label>
                    <p></p>
                    <div class="c-form__row__field"><input type="text" name="name" id="name" class="c-form__input" size="60" value="" placeholder="山田太郎">
                    </div>
                  </div>
                  <div class="c-form__row"><label for="phonetic" class="c-form__row__label"><span class="c-form__row__label__text">フリガナ</span> <span class="c-form__required">必須</span> </label>
                    <p></p>
                    <div class="c-form__row__field"><input type="text" name="phonetic" id="phonetic" class="c-form__input" size="60" value="" placeholder="ヤマダタロウ">
                    </div>
                  </div>
                  <div class="c-form__row"><label for="zip" class="c-form__row__label"><span class="c-form__row__label__text">郵便番号</span> <span class="c-form__required">必須</span> </label>
                    <p></p>
                    <div class="c-form__row__field"><input type="text" name="zip" id="zip" class="c-form__input is-short" size="60" value="" placeholder="1001000">
                      <a class="c-button is-black is-short u-pc-ml-2 is-hide-confirm">住所を自動入力</a> </div>
                  </div>
                  <div class="c-form__row"><label for="pref" class="c-form__row__label"><span class="c-form__row__label__text">都道府県</span></label>
                    <p></p>
                    <div class="c-form__row__field">
                      <div class="c-form__select"><select name="pref" class="c-form__select__field">
                          <option value="" selected="selected">
                            選択してください </option>
                          <option value="北海道">
                            北海道 </option>
                          <option value="青森県">
                            青森県 </option>
                          <option value="岩手県">
                            岩手県 </option>
                          <option value="宮城県">
                            宮城県 </option>
                          <option value="秋田県">
                            秋田県 </option>
                          <option value="山形県">
                            山形県 </option>
                          <option value="福島県">
                            福島県 </option>
                          <option value="茨城県">
                            茨城県 </option>
                          <option value="栃木県">
                            栃木県 </option>
                          <option value="群馬県">
                            群馬県 </option>
                          <option value="埼玉県">
                            埼玉県 </option>
                          <option value="千葉県">
                            千葉県 </option>
                          <option value="東京都">
                            東京都 </option>
                          <option value="神奈川県">
                            神奈川県 </option>
                          <option value="山梨県">
                            山梨県 </option>
                          <option value="長野県">
                            長野県 </option>
                          <option value="新潟県">
                            新潟県 </option>
                          <option value="富山県">
                            富山県 </option>
                          <option value="石川県">
                            石川県 </option>
                          <option value="福井県">
                            福井県 </option>
                          <option value="岐阜県">
                            岐阜県 </option>
                          <option value="静岡県">
                            静岡県 </option>
                          <option value="愛知県">
                            愛知県 </option>
                          <option value="三重県">
                            三重県 </option>
                          <option value="滋賀県">
                            滋賀県 </option>
                          <option value="京都府">
                            京都府 </option>
                          <option value="大阪府">
                            大阪府 </option>
                          <option value="兵庫県">
                            兵庫県 </option>
                          <option value="奈良県">
                            奈良県 </option>
                          <option value="和歌山県">
                            和歌山県 </option>
                          <option value="鳥取県">
                            鳥取県 </option>
                          <option value="島根県">
                            島根県 </option>
                          <option value="岡山県">
                            岡山県 </option>
                          <option value="広島県">
                            広島県 </option>
                          <option value="山口県">
                            山口県 </option>
                          <option value="徳島県">
                            徳島県 </option>
                          <option value="香川県">
                            香川県 </option>
                          <option value="愛媛県">
                            愛媛県 </option>
                          <option value="高知県">
                            高知県 </option>
                          <option value="福岡県">
                            福岡県 </option>
                          <option value="佐賀県">
                            佐賀県 </option>
                          <option value="長崎県">
                            長崎県 </option>
                          <option value="熊本県">
                            熊本県 </option>
                          <option value="大分県">
                            大分県 </option>
                          <option value="宮崎県">
                            宮崎県 </option>
                          <option value="鹿児島県">
                            鹿児島県 </option>
                          <option value="沖縄県">
                            沖縄県 </option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="c-form__select__icon">
                          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                        </svg></div>
                      <p></p>
                    </div>
                  </div>
                  <div class="c-form__row"><label for="address1" class="c-form__row__label"><span class="c-form__row__label__text">住所</span></label>
                    <p></p>
                    <div class="c-form__row__field"><input type="text" name="address1" id="address1" class="c-form__input" size="60" value="" placeholder="市区町村、番地など 例) 東京都中央区日本橋1-1">
                    </div>
                  </div>
                  <div class="c-form__row"><label for="address2" class="c-form__row__label"><span class="c-form__row__label__text">建物名</span> </label>
                    <p></p>
                    <div class="c-form__row__field"><input type="text" name="address2" id="address2" class="c-form__input" size="60" value="" placeholder="例) XXXビル000など">
                    </div>
                  </div>
                  <div class="c-form__row"><label for="phone" class="c-form__row__label"><span class="c-form__row__label__text">電話番号</span> <span class="c-form__required">必須</span> </label>
                    <p></p>
                    <div class="c-form__row__field"><input type="text" name="phone" id="phone" class="c-form__input" size="60" value="" placeholder="例) XXXビル000など">
                    </div>
                  </div>
                  <div class="c-form__row"><label for="email" class="c-form__row__label"><span class="c-form__row__label__text">メールアドレス</span> <span class="c-form__required">必須</span> </label>
                    <p></p>
                    <div class="c-form__row__field"><input type="email" name="email" id="email" class="c-form__input" size="60" value="" placeholder="例) example@xxxxxx.co.jp" data-conv-half-alphanumeric="true">
                    </div>
                  </div>
                  <div class="c-form__row is-vertical-top"><label for="content" class="c-form__row__label"><span class="c-form__row__label__text">お問い合わせ内容</span> <span class="c-form__required">必須</span> </label>
                    <p></p>
                    <div class="c-form__row__field"><textarea name="content" id="content" class="c-form__textarea" cols="50" rows="5" placeholder="入力してください"></textarea>
                    </div>
                  </div>
                </div>
                <div class="c-contact__privacy is-hide-confirm">
                  <div class="c-contact__privacy__inner">
                    <p class="c-contact__privacy__text">当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします。</p>
                    <dl class="c-contact__privacy__list">
                      <dt class="c-contact__privacy__list__title">1.法令の遵守</dt>
                      <dd class="c-contact__privacy__list__data">当社は、個人情報保護に関する関係法令、国が定める指針等及び社内規程を遵守致します。</dd>
                      <dt class="c-contact__privacy__list__title">2.個人情報の取得</dt>
                      <dd class="c-contact__privacy__list__data">当社は、個人情報を取得する際には、その利用目的を明示し、お客様の同意の範囲内で、適正かつ公正な手段によって取得いたします。</dd>
                      <dt class="c-contact__privacy__list__title">3.利用目的</dt>
                      <dd class="c-contact__privacy__list__data">当社は、お客様からご提供いただいた個人情報を、お客様とのご契約上の責務を果たすため、およびお客様に有用な情報をご提供するために利用いたします。</dd>
                      <dt class="c-contact__privacy__list__title">4.第三者提供</dt>
                      <dd class="c-contact__privacy__list__data">当社は、お客様の個人情報をあらかじめお客様の同意をいただいている場合および法令等で定められた場合、または当社と機密保持契約を締結している業務委託先に利用目的の達成に必要な範囲内で開示する場合を除き、第三者へ開示いたしません。</dd>
                      <dt class="c-contact__privacy__list__title">5.管理体制</dt>
                      <dd class="c-contact__privacy__list__data">当社は、お客様の個人情報保護のため、情報管理責任者や個人情報を取り扱う部門毎に部門別情報管理者を置き、個人情報の適切な管理に努めます。 また、業務に従事する者に対して適切な教育を実施いたします。</dd>
                      <dt class="c-contact__privacy__list__title">6.安全管理措置</dt>
                      <dd class="c-contact__privacy__list__data">当社は、お客様からご提供いただいた個人情報に対して、不正アクセス・紛失・漏洩などを防止するためのセキュリティ対策を実施いたします。</dd>
                    </dl>
                  </div>
                </div>
                <div class="c-contact__privacy-check is-hide-confirm">
                  <div class="c-form__checkbox">
                    <span class="mwform-checkbox-field horizontal-item">
                      <label for="privacy-1">
                        <input type="checkbox" name="privacy" value="privacy" id="privacy-1" class="c-form__checkbox__field">
                        <span class="mwform-checkbox-field-text"><a class="link-cbox" href="/privacy-policy/" target="_blank">プライバシーポリシー</a>に同意します。</span>
                      </label>
                    </span>
                    <span class="c-form__required">必須</span>
                  </div>
                  <p></p>
                </div>
                <ul class="c-contact__action">
                  <li><input type="submit" name="submitConfirm" value="確認画面へ進む" class="c-contact__action__button c-button is-yellow">
                  </li>
                </ul>
                <input type="hidden" id="mw_wp_form_token" name="mw_wp_form_token" value="5f44e21288"><input type="hidden" name="_wp_http_referer" value="/contact/"><input type="hidden" name="mw-wp-form-form-id" value="215"><input type="hidden" name="mw-wp-form-form-verify-token" value="5568ba116390563b279f106b7571c3e8be9dee21">
              </form>
              <!-- end .mw_wp_form -->
            </div>
          </div>
        </div><!-- ./v-contact -->
      </div><!-- ./contact-content -->
  	</main><!-- ./main -->

<!-- include footer -->
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/footer.php'; ?>