# Guía de estilo de programación Babalao

En esta guía se comprenden los lineamientos básicos que debemos considerar para obtener una alta interopabilidad con respecto al desarrollo del proyecto.

## 1. Archivos

### 2.1 Nombre de los archivos
Cada archivo será nombrado forma intuitiva relacionado con su contenido.
No podrá haber más de una **clase** declarada en el mismo archivo.

### 2.2 Etiquetas PHP

Las etiquetas permitidas en el código PHP sólo serán **<?php** o **<?=**.

### 2.3. Caracteres de codificación

Los archivos deben estar codificados en **UTF-8**

### 2.4. Uso de *side effects*

Un archivo podrá declarar un nuevo símbolo (una función, una clase, una enumeración, etc.) o incluir lógica con *side effects* pero no los dos al tiempo. 

**Nota:** entiéndase *side effects* como cualquier acción por fuera de una declaración de Símbolos, éstos comprenden cosas como generar outputs (echo), incluir archivos externos (que no hacen parte de una funcionalidad de algún símbolo), cambiar configuraciones del sistema, etc.


## 2. Declaración de símbolos

### 2.1. Namespaces y clases
Cada clase está en un archivo por sí misma y está en un namespace de al menos un nivel.

Las clases deben estar declaradas en **StudlyCaps**.

Un ejemplo de declaración de clases correcto:

```php
<?php
namespace Vendor\Model;

class Foo {
    //code
}
```

**Convensión:** Incluir llaves inmediatamente después de la declaración (en la misma línea del nombre).

**Nota:** El término *clase* hace alusión a todo tipo de las mismas: clases, interfaces, enumeraciones, etc.

### 2.2. Constantes

Las constantes de clase deben estar declaradas en **MAYÚSCULAS** y **guion bajo** como separador.

Ejemplo de uso correcto de constantes:

```php
<?php
namespace Vendor\Model;

class Foo {
    const DATE_APPROVED = '2012-06-01';
    const VERSION = '1.0';
}
```

### 2.3. Propiedades

Las propiedades de clase deben estar declaradas en **under_score**.

**Importante:** Indicar tipos de las propiedades siempre que sea posible.

Ejemplo de propiedades escritas correctamente:

```php
<?php
namespace Vendor\Model;

class Foo {
    public string $var = "default";
    public $other_var = $myVar;
}
```

### 2.4. Métodos

Los métodos deben estar declarados en **camelCase**

Evitar documentación redundante:
```php
// Good
class Url {
    public static function fromString(string $url): Url {
        // ...
    }
}

// Bad: The description is redundant, and the method is fully type-hinted.
class Url {
    /**
     * Create a url from a string.
     * @param string $url
     * @return \Spatie\Url\Url
     */
    public static function fromString(string $url): Url {
        // ...
    }
}
```

Ejemplo correcto de una declaración de método:

```php
<?php
namespace Vendor\Model;

class Foo {
    public function aFoo(){

    } 
}
```


