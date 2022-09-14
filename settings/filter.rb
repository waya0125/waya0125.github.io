# このスクリプトが動くミドルウェアのチェック
if server_name == "NGINX"
  Server = Nginx
elsif server_name == "Apache"
  Server = Apache
end

f = Server::Filter.new

# Markdown変換の準備、スタイルの読込等
css = "https://gist.github.com/andyferra/2554919/raw/2e66cabdafe1c9a7f354aa2ebf5bc38265e638e5/github.css"
title = "markdown"
md = Discount.new css, title

# MarkdownからHTMLに変換したデータをレスポンスデータに上書き
f.body = md.md2html f.body