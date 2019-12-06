---
title: 'Diga Olá'
media_order: thumb-1920-418009.jpg
smallTitle: Contato
menu: contato
cache_enable: false
visible: true
background: thumb-1920-418009.jpg
opacity: '0.75'
phoneTitle: Telefone
phonePhone: 'Residencial: (51) 35653209  '
phoneMobile: 'Celular: (51) 997962734'
emailTitle: Email
emailAddress: sroque.roque@gmail.com
addressTitle: Endereço
addressDetails: "Nova Hartz\r\nAngra dos Reis\r\nN° 12"
form:
    name: kontakt-ajax-form
    template: form-messages
    action: /home
    refresh_prevention: true
    fields:
        -
            name: name
            label: false
            placeholder: Name
            autofocus: 'off'
            autocomplete: 'on'
            type: text
            outerclasses: form-field
            classes: full-width
        -
            name: email
            label: false
            placeholder: 'Email adress'
            type: email
            outerclasses: form-field
            classes: full-width
        -
            name: subject
            label: false
            type: text
            placeholder: Subject
            outerClasses: form-field
            classes: full-width
        -
            name: message
            label: false
            placeholder: Message
            type: textarea
            outerclasses: form-field
            classes: full-width
            rows: null
    buttons:
        -
            type: submit
            value: Submit
            outerclasses: form-field
            classes: 'full-width btn--primary'
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to:
                    - '{{ config.plugins.email.from }}'
                    - '{{ form.value.email }}'
                subject: '[Message from] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            message: 'Thank you for you''re message! We will contact you shortly'
---

Se quiser entrar em contato comigo, preenche o formulário aí embaixo e bora trocar uma ideia, quem sabe eu te ajudo no que você precisar.