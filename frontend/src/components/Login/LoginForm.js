import React from "react";
import { Button } from "../Button";
import Input from "../Input";

import "./LoginForm.css"

const LoginForm = () => {
  return (
    <article className="loginForm">
      <img src="" alt="" />
      <h2>Rebonjour !</h2>
      <p>Connectez-vous à votre dashboard en un claquement de doigts</p>
      <form>
        <Input title="Email :" type="email" icon="" />
        <Input title="Mot de passe :" type="password" icon="" />
        <div>
          <label htmlFor="rememberMe">
            <input type="checkbox" id="rememberMe" />
            Se souvenir de moi
          </label>
          <a href="#">Mot de passe oublié</a>
        </div>
        <Button action="Me connecter" />
      </form>
    </article>
  );
};

export default LoginForm;
