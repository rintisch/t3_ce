# Changelog
All notable changes to this project will be documented in this file.

The format is ... more and more ... based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [4.1.0]

### Added
* Add support for TYPO3 v12
* Add `ssch/typo3-rector` for automated upgrades.

### Changed
* Multiple files changed after using `rector` with rules for TYPO3 v11.

## [4.0.0]

### Added
* `Classes/Backend/Preview/SpaceAndColorPreviewRenderer.php` to replace removed `BackendContentHook`

### Changed
* Add simple `.gitignore`.
* Adapt format of this `CHANGELOG.md` to format of *Keep a changelog*.
* The new PreviewRenderer is not registered but a hint how it needs to be done is given in `103_tt_content.php`.

### Removed
`Classes/Hooks/BackendContentHook.php` which used deprecated functionality.

## [3.1.0]

### Removed

#### Fix messed up rebase
Finally remove TailwindCSS related code.

## [3.0.0]

### Changed

### Drop support for older TYPO3 versions
Only TYPO3 v11 is supported any longer.

### Update dependency to EXT:container
Use latest version of EXT:container.

### Removed

#### Drop container content elements
All container content elements are deleted because
the concept was simply bad. It is better to use IRRE
for container with e.g. EXT:listelements.

## [2.0.0]

### Changed
#### TYPO3 v11 compatibility
The extension is only compatible with TYPO3 v11.

This lead to the following improvements:
* no `ext_emconf.php` any longer
* improved Icon Registration in `Configuration/Icons.php` instead of `ext_localconf.php`

#### Miscellaneous changes

* rename `Resources/Public/Icons/extension.svg` to `Resources/Public/Icons/Extension.svg` (uppercase) → to make it work
* remove `ext_tables.php` → was not used
* improve `README.md`
* remove `Configuration/TCA/Overrides/102_sys_template.php` → it added only static TypoScript file which is not necessary because you should import the TypoScript in your SitePackage.
* Use XLIFF files for labels and description of new content elements instead of inline text.
* Show type of content element directly in `Resources/Private/Layouts/Default.html`.

#### Use proper functionality to hide header content elements `pageHero` and `accordionContainer`

The behaviour that header sections are automatically not rendered
in the content elements `pageHero` and `accordionContainer` is not given any longer.
This was made by extra exluding these 2 elements in the `Layouts/Default.html`.

Now the proper functionality is used, see [feature changelog 79622](https://docs.typo3.org/c/typo3/cms-core/main/en-us/Changelog/8.6/Feature-79622-NewDefaultLayoutForFluidStyledContent.html#feature-79622-new-default-layout-for-fluid-styled-content)

Therefore both content elements now need in their templates something like

```html
<f:section name="Header">
    <f:comment>Do not show header for this content element.</f:comment>
</f:section>
```

To render the header label we now use also a `DropIn` which is also described in the feature chancelog.

### Removed

#### tailwindCSS styling
Affected are the following files in the directory `Resources/Private`:

* `Resources/Private/Layouts/Default.html`
* `Resources/Private/Partials/Header/All.html`
* `Resources/Private/Partials/Header/HeaderLabel.html`
* `Resources/Private/Partials/Bullets/Type-0.html`
* `Resources/Private/Partials/Bullets/Type-1.html`
* `Resources/Private/Templates/*`

#### Content element `header`

The content element `header` got an additional field `image`.

To add that function in this extension was not considering the real target of `t3_ce`: To add new content elements.
Therefore this functionality was removed. You have to transfer this functionality to your own extension / sitePackage.

The removed files are:
* `Configuration/TCA/Overrides/202_content_element_header.php`
* `Configuration/TsConfig/ContentElement/Element/120_Header.tsconfig`
* `Configuration/TypoScript/ContentElement/Header.typoscript`

#### Content element `textpic`
The template of the content element `textpic` was adapted.

To add that function in this extension was not considering the real target of `t3_ce`: To add new content elements.
You have to transfer this functionality to your own extension / sitePackage.

The removed files is:
`/Resources/Private/Templates/Textpic.html`

#### TCEFORM
Following settings are not given any longer and might need to be set by yourself:

```tsconfig
TCEFORM {
    tt_content {
        layout {
              removeItems = 1,2,3
              disableNoMatchingValueElement = 1
            }

            imageborder {
              disabled = 1
            }

            bullets_type {
              removeItems = 2
            }

            imagewidth {
              disabled = 1
            }

            imageheight {
              disabled = 1
            }

            imagecols {
              removeItems = 5,6,7,8
            }

            # for purgeCSS: pt-0 pt-4 pt-8 pt-16 pt-32 pt-64
            space_before_class {
              removeItems = extra-small, small, medium, large, extra-large
              addItems.0 = 0
              addItems.4 = XS
              addItems.8 = S
              addItems.16 = M (=Standard)
              addItems.32 = L
              addItems.64 = XL
              disableNoMatchingValueElement = 1
            }

            # for purgeCSS: pb-0 pb-4 pb-8 pb-16 pb-32 pb-64
            space_after_class {
              removeItems = extra-small, small, medium, large, extra-large
              addItems.0 = 0
              addItems.4 = XS
              addItems.8 = S
              addItems.16 = M (=Standard)
              addItems.32 = L
              addItems.64 = XL
              disableNoMatchingValueElement = 1
            }

            frame_class {
              removeItems = ruler-before, ruler-after, indent-left, indent-right, indent
              addItems {
                small-center = Schmal zentriert
                small-left = Schmal linksbündig
                wide = Überbreit
              }
            }

            # Remove unused fields from accordions
            header_layout.types.t3ce-accordion-container.disabled = 1
            header_link.types.t3ce-accordion-container.disabled = 1
            subheader.types.t3ce-accordion-container.disabled = 1
        }
    }
}
```



