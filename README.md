# IXBROKERS Frontend

#### Web Public Area Frontend List
 - [Home_Page](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Home_Page.html)
 - [Account_Open_Demo](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Account_Open_Demo.html)
 - [Account_Open_Live](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Account_Open_Live.html)
 - [Account_Types](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Account_Types.html)
 - [Products_Forex](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Products_Forex.html)
 - [Products_Commodities](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Products_Commodities.html)
 - [Products_Indices](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Products_Indices.html)
 - [Products_Stock_CFDs](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Products_Stock_CFDs.html)
 - [Products_CFD](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/23_Products_CFD.html)
 - [Products_Stocks](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Products_Stocks.html)
 - [Products_Crypto](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Products_Crypto.html)
 - [Platforms_MT4_Desktop](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Platforms_MT4_Desktop.html)
 - [Platforms_MT4_Web](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Platforms_MT4_Web.html)
 - [Platforms_MT4_Mobile](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Platforms_MT4_Mobile.html)
 - [Platforms_MT5_Desktop](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Platforms_MT5_Desktop.html)
 - [Platforms_MT5_Web](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Platforms_MT5_Web.html)
 - [Platforms_MT5_Mobile](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Platforms_MT5_Mobile.html)
 - [Partnership_Affiliate_IB](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Partnership_Affiliate_IB.html)
 - [Partnership_Affiliate_Partner](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Partnership_Affiliate_Partner.html)
 - [Company](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Company.html)
 - [Legal_Terms_And_Conditions](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Legal_Terms_And_Conditions.html)
 - [Legal_Privacy_Policy](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Legal_Privacy_Policy.html)
 - [Legal_Cookie_Policy](https://orcunkilicaslan.github.io/IXBROKERS_Frontend/html/Legal_Cookie_Policy.html)
   

# NodeJS Kurulumu
  
### NodeJS Kurulumu  
Öncelikle **npm** paket yöneticimizin olması lazım, yoksa [NodeJS](https://nodejs.org/) ‘in resmi sitesi olan [nodejs.org](https://nodejs.org/en/download/)’tan NodeJS’i bilgisayarımıza yüklememiz gerek.  Yüklemeyi yaptıktan sonra _terminal_ yada _command prompt’_a  
  
     npm install --global gulp-cli  

yazmamız gerekmektedir. Bu sayade Gulp’un cli(Command Line Interface)sini bilgisayarımıza yüklemiş olacağız, bu bize Gulp’u terminalimizde **gulp** komutunu (command) kullanmamızı sağlıcaktır. Bu işlemi de yaptıktan sonra Gulp görevleri yazmaya başlayalım.  
  
  
#### Projeyi PC'ye İndirme  
Komut Satırına Aşağıdaki Kodu Yazın  

     git clone https://github.com/orcunkilicaslan/IXBROKERS_Frontend.git  

#### Projeyi PC'de Çalıştırma  
Komut Satırına Aşağıdaki Kodu Yazın  

     npm install
     npm install -g npm  


Projeyi Derleyecekseniz İse Komut Satırına Aşağıdaki Kodu Yazın  

     gulp build --production

Projede Çalışacaksanız İse Komut Satırına Aşağıdaki Kodu Yazın  

     gulp devel  