window.onload = function () {
  let editFile = "ファイル名<input type='text'><br>編集<textarea></textarea><br><button>登録</button>";
  let createDirectory = "フォルダ名<input type='text'><button>登録</button> ";
  document.getElementsByTagName("article")[0].innerHTML = editFile + '<br>' + createDirectory;
}