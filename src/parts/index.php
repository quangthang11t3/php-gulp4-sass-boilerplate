<!-- include header -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/header.php';?>
<main class="main">
  <div class="container">
    <br>
    <p class="title-lv2 align-center">パーツリスト</p>
    <br>
    <br>
    <div class="fadeup2">
      <p class="title-lv4">パンくず</p>
      <hr>
      <div class="breadcrumb">
        <ul>
          <li><a href="/">トップページ</a></li>
          <li><a href="/">第二ページ</a></li>
          <li>当サイトについて</li>
        </ul>
      </div>
    </div>
    <br>
    <br>
    <div class="fadeup2">
      <p class="title-lv4">見出し、テキスト、リンク (ワードプレス用、「no-reset」クラスを使う)</p>
      <hr>
      <br>
      <div class="no-reset">
        <h2>コンテンツの見出し (Level 2)</h2>
        <br>
        <h3>記事ページの大見出し (Level 3)</h3>
        <br>
        <h4>記事ページの中見出し (Level 4)</h4>
        <br>
        <h5>記事ページの小見出し (Level 5)</h5>
        <br>
        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト　テキストテキストテキストテキストテキスト</p>
        <a href="">リンクリンク</a>
      </div>
    </div>
    <br>
    <br>
    <div class="fadeup">
      <p class="title-lv4">見出し (全てページ)</p>
      <hr>
      <br>
      <h2 class="title-lv2">コンテンツの見出し (Level 2)</h2>
      <br>
      <h3 class="title-lv3">記事ページの大見出し (Level 3)</h3>
      <br>
      <h4 class="title-lv4">記事ページの中見出し (Level 4)</h4>
      <br>
      <h5 class="title-lv5">記事ページの小見出し (Level 5)</h5>
      <br>
      <p class="date">2020.12.10</p>
      <p class="desc">テキストテキストテキストテキストテキストテキストテキストテキストテキスト　テキストテキストテキストテキストテキスト</p>
      <a class="link" href="">リンクリンク</a>
    </div>
    <br>
    <br>
    <div class="fadeup">
      <p class="title-lv4">ボタン、リンク、タグ</p>
      <hr>
      <br>
      <p class="title-lv5">ボタンパーツA</p>
      <div class="view-more-wrap">
        <a href="/" class="btn-view-more">レシピ一覧へ</a>
      </div>
      <br>
      <p class="title-lv5">ボタンパーツB</p>
      <div class="view-more-wrap">
        <a href="/" class="btn-view-more2">レストラン検索</a>
      </div>
      <br>
      <p class="title-lv5">ボタンパーツC</p>
      <div>
        <input class="btn" type="submit" value="検索">
        <a class="btn type2" href="javascript:void(0)">リセット</a>
      </div>
      <br>
      <br>
      <p class="title-lv5">矢印送り</p>
      <a href="" class="link-go"></a>
      <br>
      <br>
      <p class="title-lv5">閉じるボタン</p>
      <a href="javascript:void(0)" class="btn-close"></a>
      <br>
      <br>
      <p class="title-lv5">一覧を見るボタン</p>
      <br>
      <a href="" class="link-viewAll link">すべてを見る</a>
      <br>
      <br>
      <p class="title-lv5">各種テキストリンク</p>
      <a class="view-more link" href="/">レシピランキング一覧へ</a>
      <br>
      <a class="link-icon blank" href="/" target="_blank">テキストリンク</a>
      <br>
      <a class="link-icon pdf" href="/">テキストリンク</a>
      <br>
      <a class="link-icon excel" href="/">テキストリンク</a>
      <br>
      <a class="link underline" href="/">本文中のリンク</a>
      <br>
      <a class="link" href="">リンク</a>
      <br>
      <br>
      <p class="title-lv5">ラベル</p>
      <span class="label">COLUMN</span>
      <br>
      <br>
      <p class="title-lv5">タグ</p>
      <div>
        <a href="" class="tag">#豆腐</a>
        <a href="" class="tag">#栗</a>
      </div>
      <br>
      <br>
      <div class="post-direct">
        <div class="post-direct-tag">
          <a href="" class="tag">#豆腐</a>
          <a href="" class="tag">#栗</a>
          <a href="" class="tag">#スープ</a>
          <a href="" class="tag">#秋野菜</a>
          <a href="" class="tag">#高タンパク質</a>
        </div>
        <div class="post-direct-sns">
          <a href="" target="_blank" class="facebook link"><img src="<?php echo $PATH;?>/assets/images/common/icon-facebook.svg" alt=""></a>
          <a href="" target="_blank" class="link"><img src="<?php echo $PATH;?>/assets/images/common/icon-twitter.svg" alt=""></a>
          <a href="" target="_blank" class="link"><img src="<?php echo $PATH;?>/assets/images/common/icon-pinterest.svg" alt=""></a>
        </div>
      </div>
      <br>
      <div class="post-ctrl">
        <a class="post-ctrl--link back" href="">Back</a>
        <a href="" class="post-ctrl--menu link">
          <span class="home">記事一覧へ</span>
        </a>
        <a class="post-ctrl--link next" href="">Next</a>
      </div>
      <br>
      <div class="pagination">
        <p class="pagination-label">0,000件中｜1〜30件 表示</p>
        <div class="pagination-list">
          <a class="ctrl prev" href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="8" viewBox="0 0 7 8">
              <defs>
                <style>.a{fill:#7b7b6c;}</style>
              </defs>
              <path class="a" d="M928,245.063a1.589,1.589,0,0,0,0,2.952l3.574,2.175c1.334.812,2.426.157,2.426-1.454v-4.395c0-1.611-1.092-2.265-2.426-1.454Z" transform="translate(-927 -242.539)" />
            </svg>
          </a>
          <a class="active" href="">1</a>
          <a href="">2</a>
          <a href="">3</a>
          <a href="">4</a>
          <a href="">5</a>
          <a href="">6</a>
          <div class="pagination-spacer">…</div>
          <a href="">12</a>
          <a class="ctrl next" href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="8.001" viewBox="0 0 7 8.001">
              <defs>
                <style>.a{fill:#7b7b6c;}</style>
              </defs>
              <path class="a" d="M933,245.063a1.589,1.589,0,0,1,0,2.952l-3.574,2.176c-1.334.812-2.426.157-2.426-1.454v-4.4c0-1.612,1.092-2.266,2.426-1.454Z" transform="translate(-927 -242.539)" />
            </svg>
          </a>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="fadeup">
      <p class="title-lv4">Table</p>
      <hr>
      <br>
      <br>
      <div class="table">
        <table>
          <tbody>
            <tr>
              <th>テキスト</th>
              <td>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</td>
            </tr>
            <tr>
              <th>テキストテキストテキストテキスト</th>
              <td>テキストテキストテキストテキストテキスト</td>
            </tr>
          </tbody>
        </table>
      </div>
      <br>
      <br>
      <div class="table type2">
        <table>
          <tbody>
            <tr>
              <th>テキスト</th>
              <th>テキスト</th>
              <th>テキスト</th>
              <th>テキスト</th>
            </tr>
            <tr>
              <td>テキストテキストテキストテキストテキストテキストテキストテキスト</td>
              <td>テキストテキストテキストテキストテキストテキストテキストテキスト</td>
              <td>テキストテキストテキストテキストテキストテキストテキストテキスト</td>
              <td>テキストテキストテキストテキストテキストテキストテキストテキスト</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <br>
    <br>
    <div class="fadeup">
      <p class="title-lv4">Tabs</p>
      <hr>
      <br>
      <br>
      <div class="tabs">
        <div class="tabs-navWrapper">
          <ul class="tabs-nav js-tabsNav">
            <li class="tabs-item js-tabsItem active">Tab01</li>
            <li class="tabs-item js-tabsItem">Tab02</li>
            <li class="tabs-item js-tabsItem">Tab03</li>
            <li class="tabs-item js-tabsItem">Tab04</li>
          </ul>
        </div>
        <div class="tabs-cnt js-tabsCnt">
          <div class="tabs-panel js-tabsPanel">
            <h3 class="title-lv3">Content 01</h3>
            <ul class="col3">
              <li class="col3-item">
                <a class="col3-item--inner link" href="">
                  <div class="thumb">
                    <img src="<?php echo $PATH;?>/assets/images/common/dummy02.jpg" alt="">
                  </div>
                  <p class="thumb-ttl">このテキストはキャプションです。</p>
                </a>
              </li>
              <li class="col3-item">
                <a class="col3-item--inner link" href="">
                  <div class="thumb">
                    <img src="<?php echo $PATH;?>/assets/images/common/dummy02.jpg" alt="">
                  </div>
                  <p class="thumb-ttl">このテキストはキャプションです。</p>
                </a>
              </li>
              <li class="col3-item">
                <a class="col3-item--inner link" href="">
                  <div class="thumb">
                    <img src="<?php echo $PATH;?>/assets/images/common/dummy02.jpg" alt="">
                  </div>
                  <p class="thumb-ttl">このテキストはキャプションです。</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="tabs-panel js-tabsPanel">
            <h3 class="title-lv3">Content 02</h3>
          </div>
          <div class="tabs-panel js-tabsPanel">
            <h3 class="title-lv3">Content 03</h3>
          </div>
          <div class="tabs-panel js-tabsPanel">
            <h3 class="title-lv3">Content 04</h3>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="fadeup">
      <p class="title-lv4">スライダー</p>
      <hr>
      <br>
      <p class="title-lv5">タイプ1</p>
      <ul class="slider01 js-slider01">
        <li>
          <img src="<?php echo $PATH;?>/assets/images/common/dummy01.jpg" alt="">
        </li>
        <li>
          <img src="<?php echo $PATH;?>/assets/images/common/dummy01.jpg" alt="">
        </li>
        <li>
          <img src="<?php echo $PATH;?>/assets/images/common/dummy01.jpg" alt="">
        </li>
        <li>
          <img src="<?php echo $PATH;?>/assets/images/common/dummy01.jpg" alt="">
        </li>
      </ul>
      <br>
      <br>
      <p class="title-lv5">タイプ2</p>
      <ul class="slider02 js-slider02">
        <li>
          <img src="<?php echo $PATH;?>/assets/images/common/dummy01.jpg" alt="">
        </li>
        <li>
          <img src="<?php echo $PATH;?>/assets/images/common/dummy01.jpg" alt="">
        </li>
        <li>
          <img src="<?php echo $PATH;?>/assets/images/common/dummy01.jpg" alt="">
        </li>
        <li>
          <img src="<?php echo $PATH;?>/assets/images/common/dummy01.jpg" alt="">
        </li>
        <li>
          <img src="<?php echo $PATH;?>/assets/images/common/dummy01.jpg" alt="">
        </li>
      </ul>
      <br>
      <ul class="slider02-nav js-slider02-nav">
        <li style="padding: 0 5px;">
          <img src="<?php echo $PATH;?>/assets/images/common/dummy01.jpg" alt="">
        </li>
        <li style="padding: 0 5px;">
          <img src="<?php echo $PATH;?>/assets/images/common/dummy01.jpg" alt="">
        </li>
        <li style="padding: 0 5px;">
          <img src="<?php echo $PATH;?>/assets/images/common/dummy01.jpg" alt="">
        </li>
        <li style="padding: 0 5px;">
          <img src="<?php echo $PATH;?>/assets/images/common/dummy01.jpg" alt="">
        </li>
        <li style="padding: 0 5px;">
          <img src="<?php echo $PATH;?>/assets/images/common/dummy01.jpg" alt="">
        </li>
      </ul>
    </div>
    <br>
    <br>
    <div class="fadeup">
      <p class="title-lv4">アコーディオン</p>
      <hr>
      <br>
      <div class="accordion">
        <div class="accordion-label js-accorLabel">この文章はダミーコピーですお読みにならないで下さい。</div>
        <div class="accordion-cnt js-accorCnt">
          <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
      </div>
      <div class="accordion">
        <div class="accordion-label js-accorLabel">この文章はダミーコピーですお読みにならないで下さい。</div>
        <div class="accordion-cnt js-accorCnt">
          <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="fadeup">
      <p class="title-lv4">レイアウト</p>
      <hr>
      <br>
      <br>
      <div class="thumb-wrapper">
        <div class="thumb">
          <img src="<?php echo $PATH;?>/assets/images/common/dummy01.jpg" alt="">
        </div>
        <p class="thumb-ttl">このテキストはキャプションです。</p>
      </div>
      <br>
      <br>
      <div class="col2-75">
        <div class="col2-75--left">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
        <div class="col2-75--right">
          <div class="thumb">
            <img src="<?php echo $PATH;?>/assets/images/common/dummy02.jpg" alt="">
          </div>
          <p class="thumb-ttl">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
      </div>
      <br>
      <br>
      <div class="col2-25">
        <div class="col2-25--left">
          <div class="thumb">
            <img src="<?php echo $PATH;?>/assets/images/common/dummy02.jpg" alt="">
          </div>
          <p class="thumb-ttl">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
        <div class="col2-25--right">
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
        </div>
      </div>
      <br>
      <br>
      <ul class="col2">
        <li class="col2-item">
          <a class="col2-item--inner link" href="">
            <div class="thumb">
              <img src="<?php echo $PATH;?>/assets/images/common/dummy02.jpg" alt="">
            </div>
            <p class="thumb-ttl">このテキストはキャプションです。</p>
          </a>
        </li>
        <li class="col2-item">
          <a class="col2-item--inner link" href="">
            <div class="thumb">
              <img src="<?php echo $PATH;?>/assets/images/common/dummy02.jpg" alt="">
            </div>
            <p class="thumb-ttl">このテキストはキャプションです。</p>
          </a>
        </li>
      </ul>
      <br>
      <br>
      <ul class="col3">
        <li class="col3-item">
          <a class="col3-item--inner link" href="">
            <div class="thumb">
              <img src="<?php echo $PATH;?>/assets/images/common/dummy02.jpg" alt="">
            </div>
            <p class="thumb-ttl">このテキストはキャプションです。</p>
          </a>
        </li>
        <li class="col3-item">
          <a class="col3-item--inner link" href="">
            <div class="thumb">
              <img src="<?php echo $PATH;?>/assets/images/common/dummy02.jpg" alt="">
            </div>
            <p class="thumb-ttl">このテキストはキャプションです。</p>
          </a>
        </li>
        <li class="col3-item">
          <a class="col3-item--inner link" href="">
            <div class="thumb">
              <img src="<?php echo $PATH;?>/assets/images/common/dummy02.jpg" alt="">
            </div>
            <p class="thumb-ttl">このテキストはキャプションです。</p>
          </a>
        </li>
      </ul>
      <br>
      <br>
      <ul class="col4">
        <li class="col4-item">
          <a class="col4-item--inner link" href="">
            <div class="thumb">
              <img src="<?php echo $PATH;?>/assets/images/common/dummy02.jpg" alt="">
            </div>
            <p class="thumb-ttl">このテキストはキャプションです。</p>
          </a>
        </li>
        <li class="col4-item">
          <a class="col4-item--inner link" href="">
            <div class="thumb">
              <img src="<?php echo $PATH;?>/assets/images/common/dummy02.jpg" alt="">
            </div>
            <p class="thumb-ttl">このテキストはキャプションです。</p>
          </a>
        </li>
        <li class="col4-item">
          <a class="col4-item--inner link" href="">
            <div class="thumb">
              <img src="<?php echo $PATH;?>/assets/images/common/dummy02.jpg" alt="">
            </div>
            <p class="thumb-ttl">このテキストはキャプションです。</p>
          </a>
        </li>
        <li class="col4-item">
          <a class="col4-item--inner link" href="">
            <div class="thumb">
              <img src="<?php echo $PATH;?>/assets/images/common/dummy02.jpg" alt="">
            </div>
            <p class="thumb-ttl">このテキストはキャプションです。</p>
          </a>
        </li>
      </ul>
      <br>
      <br>
      <ul class="col5">
        <li class="col5-item">
          <a class="col5-item--inner link" href="">
            <div class="thumb">
              <img src="<?php echo $PATH;?>/assets/images/common/dummy02.jpg" alt="">
            </div>
            <p class="thumb-ttl">このテキストはキャプションです。</p>
          </a>
        </li>
        <li class="col5-item">
          <a class="col5-item--inner link" href="">
            <div class="thumb">
              <img src="<?php echo $PATH;?>/assets/images/common/dummy02.jpg" alt="">
            </div>
            <p class="thumb-ttl">このテキストはキャプションです。</p>
          </a>
        </li>
        <li class="col5-item">
          <a class="col5-item--inner link" href="">
            <div class="thumb">
              <img src="<?php echo $PATH;?>/assets/images/common/dummy02.jpg" alt="">
            </div>
            <p class="thumb-ttl">このテキストはキャプションです。</p>
          </a>
        </li>
        <li class="col5-item">
          <a class="col5-item--inner link" href="">
            <div class="thumb">
              <img src="<?php echo $PATH;?>/assets/images/common/dummy02.jpg" alt="">
            </div>
            <p class="thumb-ttl">このテキストはキャプションです。</p>
          </a>
        </li>
        <li class="col5-item">
          <a class="col5-item--inner link" href="">
            <div class="thumb">
              <img src="<?php echo $PATH;?>/assets/images/common/dummy02.jpg" alt="">
            </div>
            <p class="thumb-ttl">このテキストはキャプションです。</p>
          </a>
        </li>
      </ul>
    </div>
    <br>
    <br>
    <div class="fadeup">
      <p class="title-lv4">モーダル</p>
      <hr>
      <br>
      <br>
      <a data-remodal-target="modal">Click here</a>
      <div class="remodal" data-remodal-id="modal"
        data-remodal-options="hashTracking: false, closeOnOutsideClick: false">

        <button data-remodal-action="close" class="remodal-close"></button>
        <h1>Remodal</h1>
        <p>
          Responsive, lightweight, fast, synchronized with CSS animations, fully customizable modal window plugin with declarative configuration and hash tracking.
        </p>
        <br>
        <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
        <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
      </div>
    </div>
    <br>
    <br>
    <p class="title-lv4">フォームパーツ</p>
    <br>
    <input class="input" type="text" name="" placeholder="入力してください">
    <br>
    <textarea class="input textarea" name="" rows="50" cols="100">入力してください</textarea>
    <br>
    <select class="select input" id="select01">
      <option>ジャンルから探す</option>
      <option>キーワード1</option>
      <option>キーワード2</option>
    </select>
    <br>
    <form class="form-one" action="">
      <input class="input" type="text" name="keyword" placeholder="レシピをキーワードで探す">
      <input class="search" type="submit" value="">
    </form>
    <br>
    <br>
    <ul>
      <li>
        <input class="checkbox active" id="cbox01" type="checkbox" value="value1">
        <label for="cbox01">テキスト</label>
      </li>
      <br>
      <li>
        <input class="checkbox active" id="cbox02" type="checkbox" value="value1">
        <label for="cbox02">テキスト</label>
      </li>
    </ul>
    <br>
    <div class="form-action">
      <input class="btn active" type="submit" value="検索">
      <a class="btn type2" href="javascript:void(0)">リセット</a>
    </div>
    <br>
  </div>
</main><!-- ./main -->
<div class="page-top js-pageTop">
  <span>pagetop</span>
</div>
<!-- include footer -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php';?>