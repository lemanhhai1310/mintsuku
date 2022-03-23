<?php $data["title"] = "Step 1"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="home__section">
    <div class="container">
        <ul class="home__step">
            <li class="home__step__li active">
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
            <span>STEP 1 - チーム・イベント選択</span>
        </div>
        <div class="home__box2">チーム・イベントを選択してください。</div>
        <div class="home__box4">
            <div class="row">
                <div class="col-md-6">
                    <div class="home__box3">
                        <img src="https://firebasestorage.googleapis.com/v0/b/toppan-mintsuku-stage.appspot.com/o/images%2FeventBackground5.png?alt=media&token=7d051d15-a3a7-4541-92ea-09724d66fa44" alt="">
                        <span>デモ</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="home__box3">
                        <img src="https://firebasestorage.googleapis.com/v0/b/toppan-mintsuku-stage.appspot.com/o/images%2FeventBackground1.png?alt=media&token=ef6838ef-53a7-4f5a-bdea-19433728e1ff" alt="">
                        <span>2021 NHK杯</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-default home__btn"><span>キャンセル</span></button>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>