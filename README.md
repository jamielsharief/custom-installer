# Custom Installer for Composer

This is a installer which allows you customize where packages are installed.

Setup your composer package file like this.

```json
{
    "name":"username/package",
    "description":"A description",
    "type": "custom-installer",
    "require": {
        "jamielsharief/custom-installer": "*"
    },
    "extra": {
      "directory": "path/to/some/directory"
    }
  }
```

It must include
- type: custom-installer
- require: jamielsharief/custom-installer
- extra/directory: the path to install too