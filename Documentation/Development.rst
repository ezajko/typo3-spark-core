.. include:: Includes.rst.txt

.. _development:

Development
===========

Asset Building
--------------

The frontend assets (CSS, JS, Fonts, Icons) are managed via the **Spark Design System** NPM package.
The build pipeline is located in the ``Build/`` directory of this extension.

Directory Structure::

    spark-core/
    ├── Build/
    │   ├── package.json   # Defines dependencies (@ezajko/spark-design-system)
    │   ├── vite.config.js # Vite build configuration
    │   └── node_modules/
    └── Resources/
        └── Public/        # Generated assets target

Building Assets
~~~~~~~~~~~~~~~

To update the assets (e.g. after a new version of the design system is released):

.. code-block:: bash

    cd Build
    npm install
    npm run build

This command will:
1. Fetch the latest ``@ezajko/spark-design-system`` package.
2. Compile SCSS (via Vite) to ``Resources/Public/Css/site.css``.
3. Bundle JavaScript to ``Resources/Public/JavaScript/main.js``.
4. Copy Fonts (IBM Plex) to ``Resources/Public/Fonts/``.
5. Copy Bootstrap Icons to ``Resources/Public/Icons/``.
