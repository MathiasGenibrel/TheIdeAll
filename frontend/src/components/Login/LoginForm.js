import React from "react";
import { Button } from "../Button";
import Input from "../Input";

import "./LoginForm.css";
import logoCompany from "../../assets/LogoCompany.png"

const LoginForm = () => {
  return (
    <article className="loginPart">
      <article className="loginForm">
        <img src={logoCompany} alt="Logo de la société TheIdeAll" />
        <h2>Rebonjour !</h2>
        <p>Connectez-vous à votre dashboard en un claquement de doigts</p>
        <form>
          <Input title="Email :" type="email" icon="email" />
          <Input title="Mot de passe :" type="password" icon="password" />
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
      <p>
        Vous n'avez pas de compte ? <a href="#">Faites une demande!</a>
      </p>
    </article>
  );
};

export default LoginForm;
