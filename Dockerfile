FROM php:8.5.0beta2-apache-trixie

# 作業ディレクトリを設定
WORKDIR /var/www/html

# ソースコードをコピー
COPY src/ /var/www/html/

# Apacheのモジュールを有効化
RUN a2enmod rewrite

# ポート80を公開
EXPOSE 80

# Apacheを起動
CMD ["apache2-foreground"]