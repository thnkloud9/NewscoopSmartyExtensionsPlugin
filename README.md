NewscoopSmartyExtensionsPluginBundle
===================

NewscoopSmartyExtensionsPluginBundle

## Installation/Updating/Removing
#### Overview

Handled by Newscoop Plugin Manager

#### Template examples

```
    {{ array_multisort array1=$array array2=array assaign=sorted_array }}
```

The above code will set a template variable called 'sorted_array' with the sorted array of array1 and array2 using the PHP function array_multisort

```
    {{ set_current_article_events_date }}
```

Used in kobinet templates to sort arrays and set current_article_events_date template var


```
    {{ set_art_data }}
```

Used in kobinet templates to sort arrays and set art_data_array template var

```
    {{ set_current_date }}
```

Used in templates to set cMonth and cYear template vars

```
    {{ show_calendar }}
```

Used in templates to output calendar for requested month and year



