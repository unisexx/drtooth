Files in this folder and subsequent subfolders are used to translate the theme into multiple languages. For the procedure, please refer to your theme's user manual.

To translate the differences between translation files of the different theme version, just rename the *.PO files to *.POT files.

NOTE FROM http://www.icanlocalize.com/site/tutorials/how-to-translate-with-gettext-po-and-pot-files/:
"
Differences Between POT and PO Files
====================================

PO and POT files are essentially the same. The difference is in the intended use. This is why the two files have different extensions (.pot versus .po).
The tool that scans your PHP source will produce a .pot file. This file includes only the original texts, which need translation. You send this file to your translators.
The translator’s tool will be able to merge the texts from the .pot file with the existing translations (the .po file). It will mark new or modified texts as needing translation and will leave existing translation intact.
"