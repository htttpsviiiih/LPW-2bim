<?php

class Card
{
        private string $nome;
        private string $parente;
        private int $idade;
        private int $forca;
        private string $link;
        private string $fraseEfeito;

        /**
         * Get the value of nome
         */
        public function getNome(): string
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome(string $nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of parente
         */
        public function getParente(): string
        {
                return $this->parente;
        }

        /**
         * Set the value of parente
         */
        public function setParente(string $parente): self
        {
                $this->parente = $parente;

                return $this;
        }

        /**
         * Get the value of idade
         */
        public function getIdade(): int
        {
                return $this->idade;
        }

        /**
         * Set the value of idade
         */
        public function setIdade(int $idade): self
        {
                $this->idade = $idade;

                return $this;
        }

        /**
         * Get the value of forca
         */
        public function getForca(): int
        {
                return $this->forca;
        }

        /**
         * Set the value of forca
         */
        public function setForca(int $forca): self
        {
                $this->forca = $forca;

                return $this;
        }

        /**
         * Get the value of link
         */
        public function getLink(): string
        {
                return $this->link;
        }

        /**
         * Set the value of link
         */
        public function setLink(string $link): self
        {
                $this->link = $link;

                return $this;
        }

        public function getCard()
        {
                $card = "
                <div class='card'>
                        <div class ='nome'>
                        <p>Nome: {$this->getNome()}</p>
                        </div>
                        <div class ='parente'>
                        <p>Parente Divino: {$this->getParente()}</p>
                        </div>
                        <div class ='idade'>
                        <p>Idade: {$this->getIdade()}</p>
                        </div>
                        <div class ='forca'>
                        <p>Força: {$this->getForca()}</p>
                        </div>
                        
                        <div>                        
                        <img  src='{$this->getLink()}'>
                        </div>

                        <div class ='fraseEfeito'>
                        <p>{$this->getFraseEfeito()}</p>
                        </div>
                ";
                return $card;
        }

        /**
         * Get the value of fraseEfeito
         */
        public function getFraseEfeito(): string
        {
                return $this->fraseEfeito;
        }

        /**
         * Set the value of fraseEfeito
         */
        public function setFraseEfeito(string $fraseEfeito): self
        {
                $this->fraseEfeito = $fraseEfeito;

                return $this;
        }
}
