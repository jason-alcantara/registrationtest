<?php
    require "header.php";
?>

        <main>
            <div class="signup-container d-flex align-items-center justify-content-center">
                <form class="signup-form text-center border rounded p-4 bg-light" action="../includes/confirm.inc.php" method="post">
                    <h1 class="mb-3 font-weight-bold">登録</h1>
                    <p class="font-weight-normal">フォームに記入してください。</p>
                    <?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "emptyfields") {
                                echo '<p class="text-center text-danger warning">すべてのフィールドに入力してください。</p>';
                            }
                        }
                    ?>

                    <div class="form-group">
                        <input type="text" name="name" class="form-control" value="<?php if(isset($_GET['name'])) echo $_GET['name']; ?>" placeholder="氏名を入力してください">
                        <?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "invalidname" || $_GET['error'] == "invalidemailname") {
                                echo '<p class="text-danger warning">氏名を正しく入力してください</p>';
                                }
                            elseif ($_GET['error'] == "strlen") {
                                echo '<p class="text-danger warning">氏名が長すぎます</p>';
                                }
                            }
                        ?>
                    </div>

                    <div class="form-group mb-4">
                        <input type="text" name="email" class="form-control" value="<?php if(isset($_GET['email'])) echo $_GET['email']; ?>" placeholder="メールを入力してください">
                        <?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "invalidemail" || $_GET['error'] == "invalidemailname") {
                                echo '<p class="text-danger warning">メールを正しく入力してください</p>';
                                }
                            }
                        ?>
                    </div>     

                        <button type="submit" class="btn btn-primary btn-block mb-3" name="confirm">確認</button>
                        <button type="reset" class="btn btn-danger btn-block"><a href="./">リセット</a></button>
                </form>
            </div>
        </main>

<?php
    require "footer.php";
?>