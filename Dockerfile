FROM php:5.6-apache

# ลบไฟล์ sources.list เก่าออก แล้วเขียนใหม่ให้ชี้ไป archive.debian.org
RUN rm /etc/apt/sources.list && \
    echo "deb http://archive.debian.org/debian stretch main contrib non-free" >> /etc/apt/sources.list && \
    echo "deb http://archive.debian.org/debian-security stretch/updates main contrib non-free" >> /etc/apt/sources.list && \
    echo "Acquire::Check-Valid-Until \"false\";" > /etc/apt/apt.conf.d/99no-check-valid-until

# จากนั้นสั่ง apt-get update
RUN apt-get update && apt-get install -y \
    curl \
    gnupg

# (ถ้าต้องการ Node.js + Yarn ลองเพิ่มได้ แต่ Node.js 14 บน Stretch อาจมีปัญหา dependency)
RUN curl -fsSL https://deb.nodesource.com/setup_14.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g yarn

WORKDIR /var/www/html

EXPOSE 80
CMD ["apache2-foreground"]
