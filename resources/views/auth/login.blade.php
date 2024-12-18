<!DOCTYPE html>
<html>
<head>
    <title>Login - Lanal Biak</title>

<style type="text/css">
    
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
    
* {
  margin: 0;
  padding: 0;
  font-family: 'poppins', sans-serif;
}

section {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  width: 100%;
  background: url('https://i.pinimg.com/originals/33/c6/5e/33c65e761b4c81d2476d6c7a608284c1.jpg')no-repeat;
  background-position: center;
  background-size: cover;
}

section:before {
  content: "";
  background-color: #0009;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
}

.form-box {
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  width: 400px;
  height: 450px;
  background: transparent;
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 20px;
  backdrop-filter: blur(15px);                

}

h2 {
  color: #fff;
  text-align: center;
  font-size: 2em;                
}

.inputbox {
  position: relative;
  border-bottom: 2px solid #fff;
  margin: 30px 0;
  width: 310px;                
}

.inputbox label {
  transform: translateY(-50%);
  color: #fff;
  font-size: 1em;
  pointer-events: none;
  transition: .5s;
  position: absolute;
  top: 50%;
  left: 5px;                
}

input:focus~label,
input:valid~label {
  top: -5px;
}

.inputbox input {
  background: transparent;
  border: none;
  outline: none;
  font-size: 1em;
  padding: 0 35px 0 5px;
  color: #fff;
  width: 100%;
  height: 50px;               
}

.inputbox ion-icon {
  font-size: 1.2em;
  position: absolute;
  right: 8px;
  color: #fff;                
  top: 20px;
}

.forget {
  color: #fff;
  display: flex;
  justify-content: space-between;
  margin: -15px 0 15px;
  font-size: .9em;                
}

.forget label {
  color: #fff;
}

.forget label input {
  margin-right: 3px;

}

.forget label a,
.forget a {
  color: #fff;
  text-decoration: none;
}

.forget label a:hover {
  text-decoration: underline;
}

button {
  width: 100%;
  height: 40px;
  border-radius: 40px;
  background: #fff;
  border: none;
  outline: none;
  cursor: pointer;
  font-size: 1em;
  font-weight: 600;
}

.register {
  font-size: .9em;
  color: #fff;
  text-align: center;
  margin: 25px 0 10px;
}

.register p a {
  text-decoration: none;
  color: #fff;
  font-weight: 600;
}

.register p a:hover {
  text-decoration: underline;
}
    
</style>
</head>
<body>

<section>
  <div class="form-box">
    <div class="form-value">
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <h2>Admin Login</h2>
        <div class="inputbox">
          <ion-icon name="mail-outline"></ion-icon>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <label for="">Email</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="inputbox">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          <label for="">Password</label>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="forget">
          <label><input type="checkbox">Remember Me</label>
        </div>
        <button>Log in</button>
      </form>
    </div>
  </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>