Help.es
=======

Documentación en Español

Instalación
-----------

1. Actualiza composer y AppKernel
2. Incluye dentro del bloque de Javascript de tu Plantilla:
```
{% include 'SopinetFlashMessagesBundle:Messages:notification.html.twig' %}
```

3. Para lanzar un mensaje, en tu Controlador:
```
$flash = $this->get('sopinet_flashMessages');
$flash->addFlashMessages('success', 'Hola mundo');
```

4. No olvides añadir el Bundle a Assetic/Bundles en config.yml:
```
bundles:        [ AppBundle, SopinetFlashMessagesBundle ]
```
