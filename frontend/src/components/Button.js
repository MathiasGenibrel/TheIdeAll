import React from "react";

import "./Button.css"

export const Button = (props) => {
  return <button className="CTA">{props.action}</button>;
};
