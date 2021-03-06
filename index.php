<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Delicious</title>
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <style>
      * {
        scroll-behavior: smooth;
        margin: 0px;
        padding: 0px;
      }
      .main {
        display: flex;
        flex-direction: column;
        height: 700vh;
        width: 100%;
      }
      .navbar1 {
        /* background-color: rgba(0, 255, 255, 0.61); */
        height: 15vh;
        width: 100%;
        display: flex;
        flex-direction: row;
      }
      .left1 {
        /* background-color: rgba(255, 0, 0, 0.445); */
        width: 45vw;
        display: flex;
        align-items: center;
        position: relative;
        left: 8vw;
        color: red;
        font-size: 1.7rem;
        font-weight: bold;
        z-index: 0;
      }
      .right1 {
        /* background-color: rgba(0, 0, 255, 0.514); */
        width: 80vw;
        display: flex;
        align-items: center;
        justify-content: right;
        z-index: 1;
        /* padding-right: 0px; */
      }
      .about {
        text-decoration: none;
        font-size: 1.3rem;
        color: red;
        width: 15vw;
        /* width: 10vw; */
        font-weight: bold;
        padding: 0px 15px;
        margin: 20px;
      }
      .number {
        color: white;
        background-color: red;
        font-size: 1.3rem;
        font-weight: bolder;
        padding: 12px 16px;
        width: 15vw;
        border: 2px solid white;
        border-radius: 20px;

        /* margin-right: 0px; */
      }
      .number:hover {
        color: red;
        background-color: white;
        border: 2px solid red;
      }
      .log {
        display: flex;
        flex-direction: row;
        width: 95vw;
        background-color: rgba(0, 0, 255, 0.425);
      }
      .f2 {
        height: 110vh;
        width: 98.5vw;
        position: absolute;
        z-index: 0;
        background-image: url("mainpic1.jpg");
        background-size: cover;
        /* background-color: rgba(128, 255, 0, 0.521); */

        justify-content: right;
        /* align-items: flex-end; */
      }
      .f1 {
        height: 110vh;
        width: 95vw;
        /* background-image: url("mainpic1.jpg");
        background-size: cover;
        background-repeat: no-repeat; */
        /* position: relative; */
        z-index: 1;
        display: flex;
        flex-direction: column;
        position: relative;
        justify-content: center;
      }
      .good {
        color: rgb(80, 20, 20);
        font-size: 2.4rem;
        font-weight: bolder;
        position: relative;
        width: 85vw;
        left: 8vw;
        margin: 20px 0px;
      }
      .com {
        position: relative;
        left: 8vw;
        margin: 20px 0px;
        width: 85vw;
      }
      .order1 {
        color: white;
        background-color: red;
        font-size: 1.3rem;
        border: 2px solid white;
        position: relative;
        left: 8vw;
        padding: 12px 16px;
        width: 15vw;
        cursor: pointer;
      }
      .order1:hover {
        color: red;
        background-color: white;
        font-size: 1.3rem;
        border: 2px solid red;
      }
      .order2 {
        color: red;
        background-color: white;
        font-size: 1.3rem;
        border: 2px solid red;
        position: relative;
        left: 8vw;
        padding: 12px 16px;
        width: 15vw;
        cursor: pointer;
      }
      .order2:hover {
        color: white;
        background-color: red;
        font-size: 1.3rem;
        border: 2px solid white;
      }
      .reach {
        height: 15vh;
        /* width: 98.5vw; */
        width: 100%;
        background-color: red;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
      }
      .gg {
        display: flex;
        /* background-color: rgba(0, 255, 255, 0.678); */
        margin: 20px;
        height: 13vh;
        width: 20vw;
        color: white;
        font-weight: bold;
        font-size: 1.8rem;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }
      .use {
        font-size: 1.3rem;
        font-weight: 300;
      }
      .cont {
        display: flex;
        flex-direction: row;
        height: 60vh;
        width: 100%;
        justify-content: center;
      }
      .ss1 {
        display: flex;
        width: 50%;
        height: 55vh;
      }
      .ss2 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 40%;
        height: 55vh;
        /* background-color: rgba(0, 255, 255, 0.493); */
      }
      .good1 {
        color: rgb(80, 20, 20);
        font-size: 2.4rem;
        font-weight: bolder;
        position: relative;
        /* width: 85vw;
        left: 8vw; */
        margin: 20px 0px;
      }
      .good11 {
        color: rgb(80, 20, 20);
        font-size: 2.4rem;
        font-weight: bolder;
        position: relative;
        /* background-color: rgba(0, 255, 255, 0.445); */

        /* margin: 20px 0px; */
      }
      .com1 {
        position: relative;
        /* left: 8vw; */
        margin: 20px 0px;
        /* width: 85vw; */
        margin-bottom: 40px;
      }
      .com11 {
        position: relative;
        /* left: 8vw; */
        /* margin: 20px 0px; */
        /* background-color: rgba(0, 255, 255, 0.445); */
        margin-top: 40px;
        font-size: 1.2rem;
      }
      .com12 {
        position: relative;
        /* left: 8vw; */
        font-size: 1.2rem;
        /* margin: 20px 0px; */
        /* width: 85vw; */
        /* background-color: rgba(0, 255, 255, 0.445); */
        margin-bottom: 40px;
      }
      .order11 {
        color: white;
        background-color: red;
        font-size: 1.3rem;
        border: 2px solid white;
        position: relative;
        /* left: 8vw; */
        padding: 12px 16px;
        width: 15vw;
        cursor: pointer;
      }
      .order11:hover {
        color: red;
        background-color: white;
        font-size: 1.3rem;
        border: 2px solid red;
      }
      .pas {
        display: flex;
        flex-direction: row;
        height: 70vh;
        width: 100%;
        /* background-color: rgba(127, 255, 212, 0.432); */
        align-items: center;
        justify-content: center;
      }
      .t1 {
        display: flex;
        flex-direction: column;
        /* background-color: rgba(255, 0, 0, 0.349); */
        height: 67vh;
        width: 40%;
      }
      .t2 {
        display: flex;
        flex-direction: column;
        height: 67vh;
        width: 55%;
        /* background-color: rgba(0, 0, 255, 0.356); */
      }
      .tab {
        position: relative;
        left: 3vw;
      }
      .pa {
        display: flex;
        flex-direction: row;
        height: 32vh;
        /* background-color: rgba(255, 255, 0, 0.404); */
        margin: 5px;
      }
      .w3 {
        display: flex;
        /* background-color: rgba(210, 105, 30, 0.493); */
        background-image: url("w1.jpg");
        background-size: cover;
        height: 25vh;
        width: 50%;
      }
      .w11 {
        display: flex;
        height: 32vh;
        width: 48%;
        /* background-color: rgba(210, 105, 30, 0.445); */
        margin: 2px;
        justify-content: right;
        align-items: flex-end;
      }
      .w1 {
        display: flex;
        height: 32vh;
        width: 48%;
        /* background-color: rgba(210, 105, 30, 0.445); */
        margin: 2px;
        justify-content: left;
        align-items: flex-start;
      }
      .w4 {
        display: flex;
        /* background-color: rgba(210, 105, 30, 0.493); */
        background-image: url("w3.jpg");

        background-size: cover;
        height: 25vh;
        width: 50%;
      }
      .w2 {
        display: flex;
        height: 32vh;
        width: 70%;
        /* background-color: rgba(0, 0, 0, 0.596); */
        background-image: url("w4.jpg");
        background-size: cover;
      }
      .w5 {
        display: flex;
        height: 32vh;
        width: 70%;
        /* background-color: rgba(0, 0, 0, 0.596); */
        background-image: url("w2.jpg");
        background-size: cover;
        position: relative;
        left: 7.75vw;
      }
      .opp {
        display: flex;
        flex-direction: column;
        height: 70vh;
        width: 100%;
        /* background-color: rgba(127, 255, 212, 0.404); */
        background-color: rgba(255, 255, 255, 0.856);
        /* backdrop-filter: blur("50%"); */
        z-index: 2;
        justify-content: center;
        align-items: center;
      }
      .ges {
        display: flex;
        flex-direction: column;
        height: 70vh;
        width: 100%;
      }
      .fil {
        display: flex;
        position: absolute;
        flex-direction: column;
        height: 70vh;
        width: 100%;
        background-image: url("ad1.jpg");
        background-size: cover;
        z-index: 1;
      }
      .pri {
        display: flex;
        flex-direction: column;
        height: 120vh;
        width: 100%;
        margin-top: 40px;
        /* background-color: rgba(0, 255, 255, 0.5); */
        justify-content: center;
        align-items: center;
      }
      .po1 {
        display: flex;
        height: 12vh;
        width: 100%;
        /* background-color: rgba(255, 166, 0, 0.623); */
        justify-content: center;
        align-items: center;
      }
      .po2 {
        display: flex;
        height: 18vh;
        width: 100%;
        margin: 10px 0px;
        /* background-color: rgba(255, 166, 0, 0.623); */
        justify-content: center;
        align-items: center;
        font-size: 1.3rem;
      }
      .po3 {
        display: flex;
        flex-direction: row;
        height: 85vh;
        width: 100%;
        margin: 0px 10px 0px 0px;
        /* background-color: rgba(255, 166, 0, 0.623); */
        justify-content: center;
        /* align-items: center; */
      }
      .qqq {
        display: flex;
        flex-direction: column;
        width: 32%;
        margin: 5px;
        /* background-color: rgba(137, 43, 226, 0.521); */
      }
      .pic1 {
        display: flex;
        height: 55%;
        width: 90%;
        /* background-color: rgba(0, 0, 0, 0.541); */
        background-image: url("food3.jpg");
        background-size: cover;
        margin-bottom: 10px;
        border-radius: 15px;
      }
      .pic2 {
        display: flex;
        height: 55%;
        width: 90%;
        /* background-color: rgba(0, 0, 0, 0.541); */
        background-image: url("food2.jpg");
        background-size: cover;
        margin-bottom: 10px;
        border-radius: 15px;
      }
      .pic3 {
        display: flex;
        height: 55%;
        width: 90%;
        /* background-color: rgba(0, 0, 0, 0.541); */
        background-image: url("food1.jpg");
        background-size: cover;
        margin-bottom: 10px;
        border-radius: 15px;
      }
      .lan {
        font-size: 1.4rem;
        font-weight: bold;
        margin: 10px 0px;
      }
      .kk {
        margin-bottom: 25px;
      }
      .price {
        display: flex;
        flex-direction: row;
        font-size: 1.4rem;
        font-weight: bolder;
      }
      .redprice {
        color: rgb(201, 12, 12);
        margin: 15px;
      }
      .whiteprice {
        color: rgb(104, 97, 97);
        text-decoration: line-through;
        margin: 15px;
      }
      .review {
        background-color: red;
        height: 70vh;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        font-size: 1.8rem;
        font-weight: bolder;
      }
      .llo {
        color: black;
        font-weight: bold;
      }
      .faq {
        display: flex;
        flex-direction: column;
        margin-top: 35px;
        height: 85vh;
        width: 100%;
        /* background-color: rgba(0, 255, 255, 0.514); */
        /* justify-content: center; */
        align-items: center;
      }
      .jkl {
        display: flex;
        flex-direction: column;
        /* background-color: rgba(44, 4, 4, 0.562); */
        width: 90%;
        height: 75%;
      }
      .pop {
        display: flex;
        flex-direction: row;
        width: 100%;
        height: 50%;
        /* background-color: rgba(255, 0, 0, 0.534); */
        justify-content: center;
        align-items: center;
      }
      .pop1 {
        display: flex;
        flex-direction: column;
        width: 47%;
        height: 93%;
        /* background-color: rgba(255, 255, 0, 0.541); */
        margin: 0px 10px;
      }
      .lop{
        font-size: 1.4rem;
        color: rgb(73, 32, 32);
        font-weight: bold
      }
      .mon{
        display: flex;
        flex-direction: column;
      }
      .lak{
        display: flex;
        flex-direction: row;
        /* background-color: rgba(0, 0, 0, 0.548); */
        position:absolute;
        background-image: url("ad1.jpg");
        background-size: cover;
        z-index: 1;
        align-items: center;
        justify-content: center;
        height: 30vh;
        width: 100%;
      }
      .twe{
        display: flex;
        flex-direction: row;
        background-color: rgba(0, 0, 0, 0.548);
        align-items: center;
        justify-content: center;
        z-index: 2;
        height: 30vh;
        width: 100%;
      }
      .ghi{
        display: flex;
        color: white;
        font-size: 2.2rem;
        font-weight: bold;
        height: 15vh;
        width: 65%;
        /* background-color: rgba(0, 255, 255, 0.767); */
        align-items: center;
        justify-content: center;
        margin: 10px;
      }
      .ghi1{
        display: flex;
        color: white;
        /* font-size: 1.8rem; */
        height: 15vh;
        width: 30%;
        /* background-color: rgba(0, 255, 255, 0.767); */
        align-items: center;
        justify-content: center;
        margin: 10px;
      }
      .subs{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
        height: 45vh;
        width: 100%;
        /* background-color: rgba(0, 255, 255, 0.541); */
      }
      .survey{
        margin-top: 50px;
        display: flex;
        flex-direction: row;
        align-items: center;
      }
      .form{
        display: flex;
        width: 40vw;
        margin: 0px 20px;
        /* background-color: rgba(0, 0, 255, 0.404); */
      }
      .ema{
        padding: 7px 20px;
        width: 35vw;
        border: 2px solid red;
      }
      .gpp{
        /* margin-left: 10px; */
        display: flex;
        justify-content: right;
      }
      .foot{
        background-color: red;
        height: 20vh;
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: flex-end;
      }
      .yy1{
        display: flex;
        /* height: 12vh;
        width: 15%; */
        /* margin-left: 30px; */
        /* margin-right: 15px; */
        padding: 10px 25px;
        border-right: 3px solid black;
      }
      .yy2{
        /* margin: 0px 15px; */
        padding: 10px 25px;
        border-right: 3px solid black;
      }
      .yy3{
        /* margin: 0px 15px; */
        padding: 10px 25px;
        border-right: 3px solid black;
      }
      .yy4{
        display: flex;
        
        padding: 10px 25px; 
        /* border-right: 3px solid black; */
      }
      ::-webkit-scrollbar{
        width: 10px;

      }
      ::-webkit-scrollbar-thumb{
        background-color: red;
      }
    </style>
  </head>
  <body>
    <div class="main">
      <nav class="navbar1">
        <div class="left1">LOGO</div>
        <div class="right1">
          <a href="#" class="about">Home</a>
          <a href="#about"  class="about">About Us</a>
          <a href="#" target="_blank" class="about">Explore Foods</a>
          <a href="#" target="_blank" class="about">Contact</a>
          <a href="#" target="_blank" class="about">FAQ</a>
          <button class="number">1800-904-511</button>
        </div>
      </nav>
      <div class="log">
        <div class="f2">
          <!-- <img src="./mainpic1.jpg" alt="" > -->
        </div>
        <div class="f1">
          <div class="good">
            Good food choices are<br />
            good investments.
          </div>
          <div class="com">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde atque
            error, accusamus minus<br />
            nisi minima saepe, eaque inventore, quod eius ipsa voluptatum.
          </div>
          <div class="shop1">
            <button class="order1">Order Now</button>
            <button class="order2">Sign up Now</button>
          </div>
          <!-- <div class="shop2"></div> -->
        </div>
      </div>
      <div class="reach">
        <div class="gg">
          <div class="numb">967+</div>

          <div class="use">SAVINGS</div>
        </div>
        <div class="gg">
          <div class="numb">567+</div>

          <div class="use">PHOTOS</div>
        </div>
        <div class="gg">
          <div class="numb">1087+</div>

          <div class="use">ROCKETS</div>
        </div>
        <div class="gg">
          <div class="numb">564+</div>

          <div class="use">GLOBE</div>
        </div>
      </div>
      <div id="about">
        <div class="cont">
          <div class="ss1">
            <img src="./ss1.jpg" alt="error" />
          </div>
          <div class="ss2">
            <div class="good1">
              We Pride Ourselves On<br />
              Making Real Food From The<br />
              Best Ingredients.
            </div>
            <div class="com1">
              Lorem ipsum dolor sit, amet consectetur adipisicing error,<br />
              nisi minima saepe, eaque inventore.<br />
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            </div>
            <button class="order11">Order Now</button>
          </div>
        </div>
        <div class="pas">
          <div class="t1">
            <div class="good1">
              We Make Everything By<br />
              Hand With The Best Possible<br />
              Ingredients.
            </div>
            <div class="com1">
              Lorem ipsum dolor sit, amet consectetur adipisicing error, gyuto
              heliku.<br />
              Bisi minima saepe, eaque inventore. Consectetur adipisicing error,
              gyuto heliku<br />Pnisi minima saepe, eaque inventore. Consectetur
              adipisicing error, gyuto heliku<br />Hnisi minima saepe, eaque
              inventore. Consectetur adipisicing error, gyuto heliku<br />
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br />
              <br />
              <div class="tab">
                <ul>
                  <li>Consectetur adipisicing error, gyuto heliku</li>
                  <li>Consectetur adipisicing error, gyuto heliku</li>
                  <li>Consectetur adipisicing error, gyuto heliku</li>
                </ul>
              </div>
            </div>
            <button class="order11">Read More</button>
          </div>
          <div class="t2">
            <div class="pa">
              <div class="w11">
                <div class="w3"></div>
              </div>
              <div class="w1">
                <div class="w2"></div>
              </div>
            </div>
            <div class="pa">
              <div class="w1">
                <div class="w5"></div>
              </div>
              <div class="w1">
                <div class="w4"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="ges">
          <div class="fil"></div>
          <div class="opp">
            <div class="good11">When A Man's Stomach Is Full It Makes No</div>
            <div class="good11">Difference Whether He Is Rich Or Poor.</div>
            <div class="com11">
              Lorem ipsum dolor sit, amet consectetur adipisicing error, nisi
              minima saepe, eaque inventore.<br />
            </div>
            <div class="com12">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            </div>
            <button class="order11">Read More</button>
          </div>
        </div>
        <div class="pri">
          <div class="po1">
            <div class="good1">Explore Our Foods</div>
          </div>
          <div class="po2">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus
            sapiente illo atque repellat natus doloribus, sunt numquam neque.<br />
            cumque culpa architecto iure quaerat distinctio nesciunt voluptates
            officia sit accusamus assumenda, reprehenderit veritatis aut minima?
          </div>
          <div class="po3">
            <div class="qqq">
              <div class="pic1"></div>
              <div class="lan">Rainbow Vegetable Sandwich</div>
              <div class="kk">Time : 15 - 20 minutes | Serves : 1</div>
  
              <div class="price">
                <div class="redprice">$ 10.50</div>
                <div class="whiteprice">$ 12.80</div>
              </div>
              <button class="order11">Order Now</button>
            </div>
            <div class="qqq">
              <div class="pic2"></div>
              <div class="lan">Vegetarian Burger</div>
              <div class="kk">Time : 25 - 30 minutes | Serves : 1</div>
  
              <div class="price">
                <div class="redprice">$ 9.20</div>
                <div class="whiteprice">$ 10.50</div>
              </div>
              <button class="order11">Order Now</button>
            </div>
            <div class="qqq">
              <div class="pic3"></div>
              <div class="lan">Stuffed French Toast</div>
              <div class="kk">Time : 20 - 25 minutes | Serves : 1</div>
  
              <div class="price">
                <div class="redprice">$ 12.50</div>
                <div class="whiteprice">$ 14.00</div>
              </div>
              <button class="order11">Order Now</button>
            </div>
          </div>
        </div>
      </div>
      
      <div class="review">
        Testimonials
        <div
          id="carouselExampleCaptions"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="food1.jpg"
                class="d-block w-100"
                alt="error"
                height="400"
                width="550"
              />
              <div class="carousel-caption d-none d-md-block">
                <div class="llo">
                  <h4>First slide label</h4>
                  <p>
                    Some representative placeholder content for the first slide.
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="food2.jpg"
                class="d-block w-100"
                alt="error"
                height="400"
                width="550"
              />
              <div class="carousel-caption d-none d-md-block">
                <div class="llo">
                  <h4>Second slide label</h4>
                  <p>
                    Some representative placeholder content for the second
                    slide.
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="food3.jpg"
                class="d-block w-100"
                alt="error"
                height="400"
                width="550"
              />
              <div class="carousel-caption d-none d-md-block">
                <div class="llo">
                  <h4>Third slide label</h4>
                  <p>
                    Some representative placeholder content for the third slide.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="faq">
        <div class="good1">Frequently Asked Question</div>
        <div class="jkl">
          <div class="pop">
            <div class="pop1">
              <div class="lop">
                <ul>
                  <li>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Cupiditate, sequi.
                  </li>
                </ul>
              </div>
              <div class="kop">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque
                omnis quo ex facilis quia debitis voluptates fuga architecto ut
                quae excepturi, possimus amet incidunt ipsum aspernatur animi,
                cupiditate repellat? Praesentium possimus porro delectus
                perspiciatis laborum excepturi ipsa distinctio, recusandae, aut
                eveniet veniam sunt odit illo.
              </div>
            </div>
            <div class="pop1">
              <div class="lop">
                <ul>
                  <li>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Cupiditate, sequi.
                  </li>
                </ul>
              </div>
              <div class="kop">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque
                omnis quo ex facilis quia debitis voluptates fuga architecto ut
                quae excepturi, possimus amet incidunt ipsum aspernatur animi,
                cupiditate repellat? Praesentium possimus porro delectus
                perspiciatis laborum excepturi ipsa distinctio, recusandae, aut
                eveniet veniam sunt odit illo.
              </div>
            </div>
            
          </div>
          <div class="pop">
            <div class="pop1">
              <div class="lop">
                <ul>
                  <li>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Cupiditate, sequi.
                  </li>
                </ul>
              </div>
              <div class="kop">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque
                omnis quo ex facilis quia debitis voluptates fuga architecto ut
                quae excepturi, possimus amet incidunt ipsum aspernatur animi,
                cupiditate repellat? Praesentium possimus porro delectus
                perspiciatis laborum excepturi ipsa distinctio, recusandae, aut
                eveniet veniam sunt odit illo.
              </div>
            </div>
            <div class="pop1">
              <div class="lop">
                <ul>
                  <li>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Cupiditate, sequi.
                  </li>
                </ul>
              </div>
              <div class="kop">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque
                omnis quo ex facilis quia debitis voluptates fuga architecto ut
                quae excepturi, possimus amet incidunt ipsum aspernatur animi,
                cupiditate repellat? Praesentium possimus porro delectus
                perspiciatis laborum excepturi ipsa distinctio, recusandae, aut
                eveniet veniam sunt odit illo.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mon">
        <div class="lak"></div>
        <div class="twe">
          <div class="ghi">Baked Fresh Daily By Bakers With Passion.</div>
          <div class="ghi1">
            <button class="order11">Read More</button>
          </div>
        </div>
      </div>
      <div class="subs">
        <div class="good1">Hurry Up! Subscribe Our Newsletter And Get 25% Off</div>
        <div class="survey">
          <div class="form">
            <form action="">
              <input type="email" class="ema" placeholder="Enter your emailID">
            </form>
          </div>
          <div class="gpp">
            <button class="order11">Subscribe</button>
          </div>
        </div>
      </div>
      <div class="foot">
        
        <div class="yy1">
          <i class="bi bi-facebook"></i>
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
          </svg>
        </div>
        <div class="yy2">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
          </svg>
        </div>
        <div class="yy3">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
          </svg>
        </div>
        <div class="yy4">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
          </svg>
        </div>
      </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script>
      
    </script>
  </body>
</html>
