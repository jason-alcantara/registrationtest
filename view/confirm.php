<?php
    require "header.php";
    session_start();
?>

        <main>
            <div class="signup-container d-flex align-items-center justify-content-center">
                <form class="signup-form text-center border rounded p-4 bg-light" action="../includes/submit.inc.php" method="post">
                    <h1 class="mb-3 font-weight-bold">登録</h1>
                    <p class="font-weight-normal">入力したを確認してください。</p>

                    <div class="form-group">
                        <input type="text" name="name" class="form-control" value="<?php echo $_SESSION['name']?>" readonly>
                    </div>

                    <div class="form-group mb-4">
                        <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['email']?>" readonly>
                    </div>

                    <button type="submit" class="btn btn-success btn-block mb-3" name="done">完了</button>
                    <button type="submit" name="modify" class="btn btn-danger btn-block" formaction="index.php?name=<?php echo $_SESSION['name']?>&email=<?php echo $_SESSION['email']?>">修正</button>
                </form>
            </div>
        </main>

<?php
    require "footer.php";
?>