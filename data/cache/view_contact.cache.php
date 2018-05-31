        <link rel="stylesheet" href="<?php echo $template->loadCSSFile('editor-common.css'); ?>" id="theme-style" />
        <script src="<?php echo $template->loadJSFile('sceditor.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo $template->loadJSFile('monocons.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo $template->loadJSFile('bbcode.js'); ?>" type="text/javascript"></script>
        <div class="mail">
            <form class="mailto" onsubmit="return message_check();" action="./source/mailer/send.php" method="post">
                <table class="message">
                    <tr>
                        <td class="message-name">名稱：</td>
                        <td class="message-name">
                            <input class="message-input" id="Nname" type="text" name="Nname" placeholder="Name" maxlength="50">
                        </td>
                    </tr>
                    <tr>
                        <td class="message-mail">Email：</td>
                        <td class="message-mail">
                            <input class="message-input" id="Nmail" type="text" name="Nmail" placeholder="Email" maxlength="50" onblur="emailcheck()">
                        </td>
                    </tr>
                    <tr>
                        <td class="message-content">內容</td>
                        <td class="message-content">
                            <textarea id="Nmessage" type="text" name="Nmessage" placeholder="Message" rows="7" cols="50" maxlength="500"></textarea>
                        </td>
                    </tr>
                </table>
                <br />
                <button id="submit" type="submit" name="submit">送出</button>
            </form>
        </div>
        <script type="text/javascript">
        $(document).ready(function() {
            var textarea = document.getElementById("Nmessage");
            sceditor.create(textarea, {
                ltr: true,
                format: 'bbcode',
                icons: 'monocons',
                style: '<?php echo $template->loadCSSFile('editor.css'); ?>'
            })

            var emailRule = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/;

            function emailcheck() {
                if (document.getElementById("Nmail").value.search(emailRule) != -1) {
                    return true;
                } else {
                    alert('Email 格式錯誤');
                }
            }

            function message_check() {
                if (document.getElementById("Nname").value == '') {
                    alert('名稱不得為空');
                    document.getElementById("Nname").focus();
                    return false;
                } else if (document.getElementById("Nmail").value == '') {
                    alert('Email不得為空');
                    document.getElementById("Nmail").focus();
                    return false;
                }
                return true;
            }
        });
        </script>