<?php $data["title"] = "Step 3"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="home__section">
    <div class="container">
        <ul class="home__step">
            <li class="home__step__li">
                <div class="home__step__box text-center">
                    <div>
                        <div class="home__step__txt1">STEP 1</div>
                        <div class="home__step__txt2">チーム・イベント選択</div>
                    </div>
                </div>
            </li>
            <li class="home__step__li">
                <div class="home__step__box text-center">
                    <div>
                        <div class="home__step__txt1">STEP 2</div>
                        <div class="home__step__txt2">プロダクト選択</div>
                    </div>
                </div>
            </li>
            <li class="home__step__li active">
                <div class="home__step__box text-center">
                    <div>
                        <div class="home__step__txt1">STEP 3</div>
                        <div class="home__step__txt2">フォトブック編集</div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="home__box1">
            <span>STEP 3 - フォトブック編集</span>
        </div>
        <div class="home__box2"></div>
        <div class="home__box4">
            <div class="row">
                <div class="col-md-12">
                    <div class="home__box3">
                        <img src="https://firebasestorage.googleapis.com/v0/b/toppan-mintsuku-stage.appspot.com/o/images%2FeventBackground5.png?alt=media&token=7d051d15-a3a7-4541-92ea-09724d66fa44" alt="">
                        <span>デモ</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="home__box3">
                        <img src="https://firebasestorage.googleapis.com/v0/b/toppan-mintsuku-stage.appspot.com/o/images%2FPrintProductA4.jpg?alt=media&token=a44bc5bc-73b8-4496-9d5c-1caa02f3841c" alt="">
                        <div>
                            <div class="home__box3__txt1">A4フォトブックP40(NHK杯)</div>
                            <div class="home__box3__txt1">¥6,600</div>
                            <div class="home__box3__txt2">A4 / 40P /フルカラー</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home__box6">
            <div class="text-center">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="home__title">作品名を入力してください</div>
                        <div class="home__box5">
                            作品名は「オリジナルグッズ」ページの一覧で表示されるファイル名です。
                            作品に表紙タイトルを印刷したい場合は、次の編集画面にてご自身で入力してください。
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6">
                        <div class="form-group text-left">
                            <input type="email" class="form-control home__forminput" id="exampleInputEmail1" placeholder="作品名">
                            <small>0/40</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="text-center home__item5">
            <button class="btn btn-default home__btn"><span>編集をはじめる</span></button>
        </div>
        <div class="text-center home__item5">
            <button class="btn btn-default home__btn"><span>戻る</span></button>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>