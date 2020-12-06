
import React from 'react'
import Frase from './../Components/Frase'
import './../index.css'
//import './script.js'
//import { saudacao } from './functions.js'

const Index = () => {
    return (
        <>
        <div className="back">                
            <div className="main">
            <h2 className="fonte"><span id="msg_abertura"></span> Seja Bem-vindo(a)!</h2>            
        </div> 
        </div> 
        <Frase />
                                  
        </>
    );
}

export default Index;