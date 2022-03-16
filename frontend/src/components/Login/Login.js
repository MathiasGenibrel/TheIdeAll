import React from "react";
import LoginCarousel from "./LoginCarousel";
import LoginForm from "./LoginForm";

const Login = () => {
  return (
    <section>
      <LoginCarousel />
      <LoginForm />
      <p>
        Vous n'abez pas de compte ? <a href="#">Faites une demande!</a>
      </p>
    </section>
  );
};

export default Login;
