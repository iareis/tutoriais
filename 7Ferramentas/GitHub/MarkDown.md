# Tutorial Básico de Markdown

Markdown Syntax é uma sintaxe usada para padronizar e facilitar formatação de texto na web, utilizada em aplicativos como Slack e GitHub. Textos estilizados com Markdown são, na maioria dos casos, apenas texto com caracteres não-alfabéticos, como #, \* e ![](), usados para a configuração de títulos, listas, itálico, negrito e inserção de imagens.

    O Markdown funciona como um conversor de texto para HTML: os caracteres não-alfabéticos são traduzidos como <b>, <i> e <a href>, etc. Já os textos sem formatação entram como parágrafo simples <p>.

## Títulos

Correspondem a <h1>, <h2>, ... <h6> do HTML

# Título
    
## Título
    
### Título
    
#### Título
    
##### Título
    
###### Título

## Imagens

![](DataTables.png)

ou

![Alt ou título da imagem](DataTables.png)

## Tabelas

Exemplo   | Valor do exemplo
--------- | ------
Exemplo 1 | R$ 10
Exemplo 2 | R$ 8
Exemplo 3 | R$ 7
Exemplo 4 | R$ 8

ou

| Plugin | README |
| ------ | ------ |
| Dropbox | [plugins/dropbox/README.md][PlDb] |
| GitHub | [plugins/github/README.md][PlGh] |
| Google Drive | [plugins/googledrive/README.md][PlGd] |
| OneDrive | [plugins/onedrive/README.md][PlOd] |
| Medium | [plugins/medium/README.md][PlMe] |
| Google Analytics | [plugins/googleanalytics/README.md][PlGa] |

## Negrito

**negrito**

## Itálico

*itálico*

## Links

[Texto](arquivo.md)

ou

[Google](https://google.com)

## Listas de itens

* item 1
* item 2

1. item 1
2. item 2

## Citação/quote

>Este é um *blockquote*. O sinal usado abre e fecha este código no HTML. 
>Para adicionar mais uma linha à citação, basta teclar Enter para um novo
>código sinal. Isso gerará um novo parágrafo dentro do *blockquote*.
>Códigos de **negrito**, _itálico_ e <https://links.com> funcionam aqui.
```
## Código fonte

```javascript
Esta é uma linha de código em Javascript.
```

```php
Esta é uma linha de código em PHP.
```

```html
Esta é uma linha de código em HTML.
```

## Alinhamento
```html
Alinhado a esquerda | Centralizado | Alinhado a direita
:--------- | :------: | -------:
Valor | Valor | Valor

## Veja o código deste artigo em markdown


```html
## Títulos

# Título <h1>
## Título <h2>
### Título <h3>
#### Título <h4>
##### Título <h5>
###### Título <h6>

## Imagens

![](DataTables.png)

ou

![Alt ou título da imagem](DataTables.png)

## Tabelas

Exemplo   | Valor do exemplo
--------- | ------
Exemplo 1 | R$ 10
Exemplo 2 | R$ 8
Exemplo 3 | R$ 7
Exemplo 4 | R$ 8

ou

| Plugin | README |
| ------ | ------ |
| Dropbox | [plugins/dropbox/README.md][PlDb] |
| GitHub | [plugins/github/README.md][PlGh] |
| Google Drive | [plugins/googledrive/README.md][PlGd] |
| OneDrive | [plugins/onedrive/README.md][PlOd] |
| Medium | [plugins/medium/README.md][PlMe] |
| Google Analytics | [plugins/googleanalytics/README.md][PlGa] |

## Negrito

**negrito**

## Itálico

*itálico*

## Links

[Texto](arquivo.md)

ou

[Google](https://google.com)

## Listas de itens

* item 1
* item 2

1. item 1
2. item 2

## Citação/quote

>Este é um *blockquote*. O sinal usado abre e fecha este código no HTML. 
>Para adicionar mais uma linha à citação, basta teclar Enter para um novo
>código sinal. Isso gerará um novo parágrafo dentro do *blockquote*.
>Códigos de **negrito**, _itálico_ e <https://links.com> funcionam aqui.

## Código fonte

```javascript
Esta é uma linha de código em Javascript.
```

```php
Esta é uma linha de código em PHP.
```

```html
Esta é uma linha de código em HTML.
```

## Alinhamento

Alinhado a esquerda | Centralizado | Alinhado a direita
:--------- | :------: | -------:
Valor | Valor | Valor
```

## Referências

- https://docs.pipz.com/central-de-ajuda/learning-center/guia-basico-de-markdown#open
- https://dillinger.io/ - Editor online
