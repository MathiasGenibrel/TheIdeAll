import React from "react";
import LoginCarousel from "./LoginCarousel";
import LoginForm from "./LoginForm";

import "./Login.css"

const Login = () => {
  return (
    <section className="login">
      <LoginCarousel />
      <LoginForm />
    </section>
  );
};

export default Login;
