<html>
<head>
   <link rel="stylesheet" href="themes/base/jquery.ui.all.css" />
<script type="text/javascript" src="jquery-1.4.2.js"></script>
<script type="text/javascript" src="ui/jquery-ui-1.8.12.custom.min.js"></script>




// 文字入力ダイアログの表示(JQuery)
function ShowJQueryInputDialog() {
	var strTitle = "文字入力ダイアログ";
	var strComment = "これは文字入力ダイアログです。";
	
	// ダイアログのメッセージを設定
	$( "#show_dialog" ).html( '<p>' + strComment + '</p><input type="text" name="inputtxt" id="inputtxt" value="初期入力されている文字列です" />' );

	// ダイアログを作成
	$( "#show_dialog" ).dialog({
		modal: true,
		title: strTitle,
		buttons: {
			"OK": function() {
				$( this ).dialog( "close" );
				ShowJQueryMessageDialog("入力された文字は「" + $( "#inputtxt" ).val() + "」です。");
			},
			"キャンセル": function() {
				$( this ).dialog( "close" );
				ShowJQueryMessageDialog( "キャンセルがクリックされました" );
			}
		}
	});
}

// 文字入力ダイアログの表示
function ShowInputDialog() {
	var ret;
	ret = prompt("これは文字入力ダイアログです。入力した文字が表示されます。", "初期入力されている文字列です");
	if (ret==null) {
		alert("キャンセルボタンがクリックされました");
	} else {
		alert("入力された文字は「" + ret + "」です。");
	}
}



    </script>

</head>

<body>

<?php echo "top"; ?>

    <input type="button" value = "start call " ShowJQueryInputDialog() >
    <input type="button" value= "test" ShowInputDialog() >




</html>
