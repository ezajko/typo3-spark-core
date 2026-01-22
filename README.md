# Spark Core Extension

Core functionality and configuration for the ETF Spark TYPO3 distribution.

## Features

- Core TypoScript configuration
- Fluid Styled Content enhancements
- Custom Content Elements (Gallery, Files)
- RTE Configuration (CKEditor)
- Backend Layouts
- Design System Integration (@ezajko/spark-design-system)

## Installation

This extension is part of the ETF Spark distribution and is typically installed via Composer.

```bash
composer req etf-unsa/spark-core
```

## Configuration

Include the static TypoScript "Spark Core" in your site configuration.

## Development

Asset build pipeline is located in `Build/` directory.

```bash
cd Build
npm install
npm run build
```
This will compile SCSS and JS from `@ezajko/spark-design-system` into `Resources/Public`.

## License

GPL-2.0-or-later
