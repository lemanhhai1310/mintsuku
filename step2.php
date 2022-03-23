<?php $data["title"] = "Step 2"; ?>
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
            <li class="home__step__li active">
                <div class="home__step__box text-center">
                    <div>
                        <div class="home__step__txt1">STEP 2</div>
                        <div class="home__step__txt2">プロダクト選択</div>
                    </div>
                </div>
            </li>
            <li class="home__step__li">
                <div class="home__step__box text-center">
                    <div>
                        <div class="home__step__txt1">STEP 3</div>
                        <div class="home__step__txt2">フォトブック編集</div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="home__box1">
            <span>STEP 2 - プロダクト選択</span>
        </div>
        <div class="home__box2">作成するプロダクトを選択してください。</div>
        <div class="home__box4">
            <div class="row">
                <div class="col-md-6">
                    <div class="home__box3">
                        <img src="https://firebasestorage.googleapis.com/v0/b/toppan-mintsuku-stage.appspot.com/o/images%2FPrintProductA4.jpg?alt=media&token=a44bc5bc-73b8-4496-9d5c-1caa02f3841c" alt="">
                        <div>
                            <div class="home__box3__txt1">A4フォトブックP40(NHK杯)</div>
                            <div class="home__box3__txt1">¥6,600</div>
                            <div class="home__box3__txt2">A4 / 40P /フルカラー</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
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
        <div class="text-center">
            <button class="btn btn-default home__btn"><span>戻る</span></button>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>