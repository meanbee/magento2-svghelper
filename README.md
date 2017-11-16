# Magento 2 SVG Helper

Simple module that provides a block level helper for reading in an SVG files source from a theme in Magento 2.

## Installation

Install this extension via Composer:

```
composer require meanbee/magento2-svghelper
```

## Development

### Setting up a development environment

A Docker development environment is included with the project:

```
docker-compose run --rm cli magento-extension-installer Meanbee_SVGHelper \
&& docker-compose up -d
```

## Usage

The SVGHelper is set as data on every block. This means that in your template you can call:

```<?php echo $block->getData('svgHelper')->getViewSvg('pathtofile.svg') ?>```

or

```<?php echo $block->getData('svgHelper')->getViewSvg('Magento_Module::pathtofile.svg') ?>```

This will output the raw contents of the svg file.
