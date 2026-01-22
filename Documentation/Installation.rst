.. include:: Includes.rst.txt

.. _installation:

Installation
============

The extension is typically part of the **ETF Spark Distribution** and installed via Composer.

Requirement
-----------

.. code-block:: bash

    composer req rootba/typo3-spark-core

Site Set
--------

Spark Core provides a **Site Set** for TYPO3 v13. You must enable it in your Site Configuration.

1. Go to **Site Management** > **Sites**.
2. Edit your Site Configuration.
3. In the **General** tab, under **Site Sets**, select:
   
   * **Spark Core Design System** (`spark-design-system/spark-core`)

This Site Set automatically includes:
* Fluid Styled Content
* Spark Core TypoScript & TSConfig
* Content Element Definitions
