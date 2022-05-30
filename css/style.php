<style>
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');

:root {
  --primary-color: #047aed;
  --secondary-color: #1c3fa8;
  --dark-color: #002240;
  --light-color: #f4f4f4;
  --success-color: #5cb85c;
  --error-color: #d9534f;
}

* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

body {
  font-family: 'Lato', sans-serif;
  color: #333;
  line-height: 1.6;
}

ul {
  list-style-type: none;
}

a {
  text-decoration: none;
  color: #333;
}

h1,
h2 {
  font-weight: 300;
  line-height: 1.2;
  margin: 10px 0;
}

p {
  margin: 10px 0;
}

img {
  width: 100%;
}

code,
pre {
  background: #333;
  color: #fff;
  padding: 10px;
}

.hidden {
  visibility: hidden;
  height: 0;
}

/* Navbar */
.navbar {
  background-color: var(--primary-color);
  color: #fff;
  height: 70px;
}

.navbar ul {
  display: flex;
}

.navbar a {
  color: #fff;
  padding: 10px;
  margin: 0 5px;
}

.navbar a:hover {
  border-bottom: 2px #fff solid;
}

.navbar .flex {
  justify-content: space-between;
}

/* Showcase */
.showcase {
  height: 400px;
  background-color: var(--primary-color);
  color: #fff;
  position: relative;
}

.showcase h1 {
  font-size: 40px;
}

.showcase p {
  margin: 20px 0;
}

.showcase .grid {
  overflow: visible;
  grid-template-columns: 55% auto;
  gap: 30px;
}

.showcase-text {
  animation: slideInFromLeft 1s ease-in;
  margin-bottom: auto;
}

.showcase-form {
  position: relative;
  top: 60px;
  height:450px;
  width: 400px;
  padding: 40px;
  z-index: 100;
  justify-self: flex-end;
  animation: slideInFromRight 1s ease-in;
}

.showcase-form .form-control {
  margin: 30px 0;
}

.showcase-form input[type='text'],
.showcase-form input[type='email'],
.showcase-form input[type='date'],
.select 
{
  border: 0;
  border-bottom: 1px solid #b4becb;
 width: 100%;
  padding: 3px;
  font-size: 16px;
}
.showcase-form input[type='date'],
.select{
  color:gray;
}
.showcase-form input[type='file'] {
  outline: none;
  border: 0;
  border-bottom: 1px solid #b4becb;
 width: 100%;
  padding: 3px;
  font-size: 16px;
}
.showcase-form input:focus {
  outline: none;
}

.showcase::before,
.showcase::after {
  content: '';
  position: absolute;
  height: 100px;
  bottom: -70px;
  right: 0;
  left: 0;
  background: #fff;
  transform: skewY(-3deg);
  -webkit-transform: skewY(-3deg);
  -moz-transform: skewY(-3deg);
  -ms-transform: skewY(-3deg);
}

/* Stats */
.stats {
  padding-top: 200px;
  animation: slideInFromBottom 1s ease-in;
}

.stats-heading {
  max-width: 500px;
  margin: auto;
  margin-top: 200px;
}

.stats .grid h3 {
  font-size: 35px;
}

.stats .grid p {
  font-size: 20px;
  font-weight: bold;
}

/* Cli */
.cli .grid {
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: repeat(2, 1fr);
}

.cli .grid > *:first-child {
  grid-column: 1 / span 2;
  grid-row: 1 / span 2;
}

/* Cloud */
.cloud .grid {
  grid-template-columns: 4fr 3fr;
}

/* Languages */

.languages .flex {
  flex-wrap: wrap;
}

.languages .card {
  text-align: center;
  margin: 18px 10px 40px;
  transition: transform 0.2s ease-in;
}

.languages .card h4 {
  font-size: 20px;
  margin-bottom: 10px;
}

.languages .card:hover {
  transform: translateY(-15px);
}

/* Features */
.features-head img,
.docs-head img {
  width: 200px;
  justify-self: flex-end;
}

.features-sub-head img {
  width: 300px;
  justify-self: flex-end;
}

.features-main .card > i {
  margin-right: 20px;
}

.features-main .grid {
  padding: 30px;
}

.features-main .grid > *:first-child {
  grid-column: 1 / span 3;
}

.features-main .grid > *:nth-child(2) {
  grid-column: 1 / span 2;
}

/* Docs */
.docs-main h3 {
  margin: 20px 0;
}

.docs-main .grid {
  grid-template-columns: 1fr 2fr;
  align-items: flex-start;
}

.docs-main nav li {
  font-size: 17px;
  padding-bottom: 5px;
  margin-bottom: 5px;
  border-bottom: 1px #ccc solid;
}

.docs-main a:hover {
  font-weight: bold;
}

/* Footer */
.footer .social a {
  margin: 0 10px;
}
.footer{
  margin-top: -25px;
}
.fa-github:hover {
  color: #000000;
}

.fa-facebook:hover {
  color: #1773EA;
}

.fa-instagram:hover {
  color: #B32E87;
}

.fa-twitter:hover {
  color: #1C9CEA;
}

/* Animations */
@keyframes slideInFromLeft {
  0% {
    transform: translateX(-100%);
  }

  100% {
    transform: translateX(0);
  }
}

@keyframes slideInFromRight {
  0% {
    transform: translateX(100%);
  }

  100% {
    transform: translateX(0);
  }
}

@keyframes slideInFromTop {
  0% {
    transform: translateY(-100%);
  }

  100% {
    transform: translateX(0);
  }
}

@keyframes slideInFromBottom {
  0% {
    transform: translateY(100%);
  }

  100% {
    transform: translateX(0);
  }
}

/* Tablets and under */
@media (max-width: 768px) {
  .grid,
  .showcase .grid,
  .stats .grid,
  .cli .grid,
  .cloud .grid,
  .features-main .grid,
  .docs-main .grid {
    grid-template-columns: 1fr;
    grid-template-rows: 1fr;
  }

  .showcase {
    height: auto;
  }

  .showcase-text {
    text-align: center;
    margin-top: 40px;
    animation: slideInFromTop 1s ease-in;
  }

  .showcase-form {
    justify-self: center;
    margin: auto;
    animation: slideInFromBottom 1s ease-in;
  }

  .cli .grid > *:first-child {
    grid-column: 1;
    grid-row: 1;
  }

  .features-head,
  .features-sub-head,
  .docs-head {
    text-align: center;
  }

  .features-head img,
  .features-sub-head img,
  .docs-head img {
    justify-self: center;
  }

  .features-main .grid > *:first-child,
  .features-main .grid > *:nth-child(2) {
    grid-column: 1;
  }
}

/* Mobile */
@media (max-width: 500px) {
  .navbar {
    height: 110px;
  }

  .navbar .flex {
    flex-direction: column;
  }

  .navbar ul {
    padding: 10px;
    background-color: rgba(0, 0, 0, 0.1);
  }
  
  .showcase-form {
    width: 300px;
  }
}

.serviceswrapper {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-template-rows: 1fr;
}

.servicescard {
  margin: 10px;
  height: 425px;
  width: 275px;
  border-radius: 5px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  color: #fff;
  background-image: linear-gradient(to right, #00dbde 0%, #fc00ff 100%);
  transition: 0.3s ease-in;
}

.servicescard:nth-child(2) {
  background: #1fa2ff; /* fallback for old browsers */
  background: -webkit-linear-gradient(
    to right,
    #a6ffcb,
    #12d8fa,
    #1fa2ff
  ); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(
    to right,
    #a6ffcb,
    #12d8fa,
    #1fa2ff
  ); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.servicescard:nth-child(3) {
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
}

.servicescard h2 {
  text-align: center;
}

.servicescard p {
  text-align: center;
  margin-top: 24px;
  font-size: 20px;
}

.servicesbtn {
  display: flex;
  justify-content: center;
  margin-top: 16px;
}

.servicescard button{
  color: #fff;
  padding: 14px 24px;
  border: none;
  outline: none;
  border-radius: 4px;
  background: #323333;
  font-size: 1rem;
}

.servicescard button:hover {
  cursor: pointer;
}

.servicescard:hover {
  transform: scale(1.075);
  transition: 0.3s ease-in;
  cursor: pointer;
}

@media screen and (max-width: 1300px) {
  .serviceswrapper {
    grid-template-columns: 1fr 1fr ;
  }
}

@media screen and (max-width: 768px) {
  .serviceswrapper {
    grid-template-columns: 1fr;
  }
}

.services__wrapper {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-template-rows: 1fr ;
}

.services__card {
  margin: 10px;
  height: 425px;
  width: 275px;
  border-radius: 5px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  color: #fff;
  background-image: linear-gradient(to right, #00dbde 0%, #fc00ff 100%);
  transition: 0.3s ease-in;
}

.services__card:nth-child(2) {
  background: #1fa2ff; /* fallback for old browsers */
  background: -webkit-linear-gradient(
    to right,
    #a6ffcb,
    #12d8fa,
    #1fa2ff
  ); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(
    to right,
    #a6ffcb,
    #12d8fa,
    #1fa2ff
  ); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.services__card:nth-child(3) {
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
}

.services__card h2 {
  text-align: center;
}

.services__card p {
  text-align: center;
  margin-top: 24px;
  font-size: 20px;
}

.services__btn {
  display: flex;
  justify-content: center;
  margin-top: 16px;
}

.services__card button{
  color: #fff;
  padding: 14px 24px;
  border: none;
  outline: none;
  border-radius: 4px;
  background: #323333;
  font-size: 1rem;
}

.services__card button:hover {
  cursor: pointer;
}

.services__card:hover {
  transform: scale(1.075);
  transition: 0.3s ease-in;
  cursor: pointer;
}

@media screen and (max-width: 700px) {
  .services__wrapper {
    grid-template-columns: 1fr 1fr ;
  }
}

@media screen and (max-width: 768px) {
  .services__wrapper {
    grid-template-columns: 1fr;
  }
}.avatar {
  vertical-align: middle;
  width: 100px;
  height: 100px;
  border-radius: 50%;
cursor:pointer;  
}
.img{
  width: 100px;
  height: 100px;
  border-radius: 50%;
}

.cards{
  margin-top: 350px;

} 
.carte{
  width: 400px;
  height: 400px;
  display: flex;
 
}
.footperson{
 display: flex;
 position: relative;
}
.cards1{
  height: 450px;
}
table{
  width: 50%;
  margin: 30px auto;
  border-collapse: collapse;
  text-align: left;
}
tr{
  border-bottom: 1px solid #cbcbcb;
}
th, td{
  border: none;
  height: 30px;
  padding: 2px;
}
tr:hover{
background: #f5f5f5;
}
.input-group{
  margin: 10px 0px 10px 0px;
}
.input-group label{
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input{
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn{
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}

.contenair{
  height: 1000px;
}
.car{
  width:700px;
  
}
.form{
  visibility:hidden;
}
</style>