.. include:: Includes.rst.txt

.. _content-elements:

Content Elements
================

Spark Core introduces a set of custom Content Elements (CEs) and Containers tailored for the Spark Design System.

New Elements
------------

Hero Banner
~~~~~~~~~~~
A full-width banner component, typically used at the top of pages.
* **Fields:** Header, Subheader, Image, Bodytext, Height (Auto to Full Screen), Overlay toggle.

Call to Action (CTA)
~~~~~~~~~~~~~~~~~~~~
A prominence element to drive user conversion.
* **Fields:** Header, Bodytext, Button Text/Link, Icon, Variant (Light/Dark/Primary), Height settings.

Card
~~~~
A flexible card component used for teasers, news, or feature highlights.
* **Fields:** Header, Image, Media Position (Top/Left/Right), Bodytext, Footer, Icon.
* **Can contain:** List Items.

List Group
~~~~~~~~~~
A list of items, useful for feature lists, links, or data points.
* **Structure:** A container element managing child ``List Item`` records.

Galleries
~~~~~~~~~
Two modes are available:
1. **Gallery (Manual)**: Select individual images from Filelist. Supports Grid Settings.
2. **Gallery (Collection)**: Select a complete File Collection.

Files
~~~~~
1. **File (Download Card)**: A highlighted card for a single file download.
2. **File Collection (List)**: A standard list of files from a collection.

Containers
----------

Spark Core integrates with ``b13/container`` to provide grid layouts:

* **Card Group**: Groups ``Card`` elements with equal height.
* **1 Column**: Full width wrapper.
* **2 Columns**: 50% / 50% split.
* **2 Columns Right**: 33% / 66% split.
* **3 Columns**: 33% / 33% / 33% split.
* **4 Columns**: 25% / 25% / 25% / 25% split.
