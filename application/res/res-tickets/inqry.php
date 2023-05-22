                                <style>
                                .help-tip{
                                    position:absolute;
                                    text-align: center;
                                    width: 24px;
                                    height: 24px;
                                    cursor: default;
                                }

                                .help-tip:before{
                                    content:'   ';
                                }

                                .help-tip:hover p{
                                    display:block;
                                    transform-origin: 100% 0%;
                                    -webkit-animation: fadeIn 0.3s ease-in-out;
                                    animation: fadeIn 0.3s ease-in-out;

                                }

                                .help-tip p{    /* The tooltip */
                                    display: none;
                                    text-align: left;
                                    background-color: #1E2021;
                                    padding: 20px;
                                    width: 300px;
                                    position: absolute;
                                    border-radius: 3px;
                                    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
                                    right: -4px;
                                    top: 50px;
                                    color: #FFF;
                                    font-size: 13px;
                                    line-height: 1.4;
                                }

                                .help-tip p:before{ /* The pointer of the tooltip */
                                    position: absolute;
                                    content: '';
                                    width:0;
                                    height: 0;
                                    border:6px solid transparent;
                                    border-bottom-color:#1E2021;
                                    right:10px;
                                    top:-12px;
                                }

                                .help-tip p:after{ /* Prevents the tooltip from being hidden */
                                    width:100%;
                                    height:40px;
                                    content:'';
                                    position: absolute;
                                    top:-40px;
                                    left:0;
                                }

                                /* CSS animation */

                                @-webkit-keyframes fadeIn {
                                    0% { 
                                        opacity:0; 
                                        transform: scale(0.6);
                                    }

                                    100% {
                                        opacity:100%;
                                        transform: scale(1);
                                    }
                                }

                                @keyframes fadeIn {
                                    0% { opacity:0; }
                                    100% { opacity:100%; }
                                }

                               </style>