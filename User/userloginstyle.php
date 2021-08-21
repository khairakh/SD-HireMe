<style>
html, body {
	margin:0;
	height:100%;
}
.companyName {
	font-size:60px;
	color:#363636;
	text-align:center;
	font-weight: bold;
	background-color: #DBF6E9;
	padding:100;
  width: 100%;
}
.box{
  width: 300px;
  padding: 30px;
  position: absolute;
  top: 50%;
  left:50%;
  transform: translate(-50%,-50%);
  background: rgba(57.0, 59.0, 68.0, 1.0);
  text-align: center;
}
.box h1
{
  color: white;
  text-transform:uppercase;
  font-weight: 700;
}
.box input[type="text"],.box input[type="password"]
{
  border: 0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 3px solid #8D93AB;
  padding: 14px 10px;
  width: 220px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25px;
}
.box input[type="text"]:focus,.box input[type="password"]:focus{
  width: 270px;
  border-color: #D6E0F0;
}
.box input[type="submit"]{
  border: 0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 3px solid #F1F3F8;
  padding: 14px 10px;
  width: 220px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25px;
  cursor: pointer;
}
.box input[type="submit"]:hover{
  background: #8D93AB;
}
.box a
{
  color: white;
}
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    padding: 2%;
    background-color: #3F3F44;
    color: white;
    text-align: center;
}
</style>
