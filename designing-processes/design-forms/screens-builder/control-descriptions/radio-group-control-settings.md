---
description: >-
  Add a Radio Group control from which the form user can select only one option
  from a group of options.
---

# Radio Group Control Settings

## Control Description

The Radio Group control provides a group of options from which the form user can only select one.

{% hint style="info" %}
This control is not available for [Display](../types-for-screens.md#display)-type ProcessMaker Screens. See [Screen Types](../types-for-screens.md).
{% endhint %}

## Add the Control to a ProcessMaker Screen

{% hint style="info" %}
Your user account or group membership must have the following permissions to add a control to a ProcessMaker Screen:

* Screens: View Screens
* Screens: Edit Screens

See the ProcessMaker [Screens](../../../../processmaker-administration/permission-descriptions-for-users-and-groups.md#screens) permissions or ask your ProcessMaker Administrator for assistance.
{% endhint %}

Follow these steps to add this control to the ProcessMaker Screen:

1. [Create](../../manage-forms/create-a-new-form.md) or [open](../../manage-forms/view-all-forms.md) the ProcessMaker Screen. The ProcessMaker Screen is in [Editor mode](../screens-builder-modes.md#editor-mode).
2. View the ProcessMaker Screen page to which to add the control.
3. Go to the **Controls** panel on the left side of the ProcessMaker Screen.
4. Drag the **Radio Group** icon![](../../../../.gitbook/assets/radio-group-control-screens-builder-processes.png)from the **Controls** panel anywhere within the ProcessMaker Screen canvas represented by the dotted-lined box. Existing controls on the ProcessMaker Screen canvas adjust positioning based on where you drag the control.
5. Place into the ProcessMaker Screen canvas where you want the control to display on the page.  

   ![](../../../../.gitbook/assets/radio-group-control-placed-screens-builder-processes.png)

6. Configure the Radio Group control. See [Inspector Settings](radio-group-control-settings.md#inspector-settings).

Below is a Radio Group control in Preview mode.

![Radio Group control in Preview mode](../../../../.gitbook/assets/radio-group-control-preview-screens-builder-processes.png)

## Delete the Control from a ProcessMaker Screen

{% hint style="warning" %}
Deleting a control also deletes configuration for that control. If you add another control, it will have default settings.
{% endhint %}

Click the **Delete** icon![](../../../../.gitbook/assets/delete-screen-control-screens-builder-processes.png)for the control to delete it.

## Inspector Settings <a id="inspector-settings"></a>

{% hint style="info" %}
### Don't Know What the Inspector Panel Is?

See [View the Inspector Panel](../view-the-inspector-pane.md).

### Permissions Required

Your user account or group membership must have the following permissions to edit a ProcessMaker Screen control:

* Screens: View Screens
* Screens: Edit Screens

See the ProcessMaker [Screens](../../../../processmaker-administration/permission-descriptions-for-users-and-groups.md#screens) permissions or ask your ProcessMaker Administrator for assistance.
{% endhint %}

Below are Inspector settings for the Radio Group control:

* **Variable Name:** Enter a unique name that references this control elsewhere in ProcessMaker in the following ways:

  * Reference this value in other Screens Builder controls or Process Modeler.
  * Reference this value to in [**Visibility Rule** setting expressions](expression-syntax-components-for-show-if-control-settings.md).

  This is a required setting.

* **Field Label:** Enter the field label text that displays. **New Radio Button Group** is the default value.
* **Help Text:** Enter text that provides additional guidance on the field's use. This setting has no default value.
* **Options List:** Enter the list of options available in the select box. Add options in the order they are to display from top to bottom in the drop-down. The default option is called **new** with the content **New Option**.  

  ![](../../../../.gitbook/assets/radio-group-control-options-list-screens-builder-processes.png)

  Each option has the following settings:

  * **Value:** **Value** is the internal data name for the option that only the Process Owner views at design time.
  * **Content:** **Content** is the option label displayed to the form user. 
  * **Actions:** Click the **Remove**![](../../../../.gitbook/assets/options-list-delete-option-icon-screens-builder-processes.png)icon to remove the radio button from the group.

  Follow these steps to add an option: 

  1. Click **Add Option** from below the **Options List** setting. The **Add New Option** screen displays.  

     ![](../../../../.gitbook/assets/add-new-option-screen-screen-builder-processes.png)

  2. In the **Option Value** field, enter the **Value** option value \(as described above\).
  3. In the **Option Label** field, enter the **Content** option value \(as described above\).
  4. Click **OK**. The option displays below the existing options in **Options List**.
  5. If necessary, click the **Show in Json Format** checkbox to view the radio group options in JSON format.

* **Toggle Style?:** Select to display a toggle control instead of a radio button control for each radio group option.
* **Element Background Color:** Select to specify the background color of this control.
* **Text Color:** Select to specify the text color that displays in this control.
* **Visibility Rule:** Enter an expression that dictates the condition\(s\) under which this control displays. See [Expression Syntax Components for "Visibility Rule" Control Settings](expression-syntax-components-for-show-if-control-settings.md#expression-syntax-components-for-show-if-control-settings). If this setting does not have an expression, then this control displays by default.
* **CSS Selector Name:** Enter the value to represent this control in custom CSS syntax when in [Custom CSS](../add-custom-css-to-a-screen.md#add-custom-css-to-a-processmaker-screen) mode. As a best practice, use the same **CSS Selector Name** value on different controls to have the same custom CSS applied.

## Related Topics <a id="related-topics"></a>

{% page-ref page="../types-for-screens.md" %}

{% page-ref page="../view-the-inspector-pane.md" %}

{% page-ref page="./" %}

{% page-ref page="rich-text-control-settings.md" %}

{% page-ref page="text-control-settings.md" %}

{% page-ref page="line-input-control-settings.md" %}

{% page-ref page="select-control-settings.md" %}

{% page-ref page="checkbox-control-settings.md" %}

{% page-ref page="textarea-control-settings.md" %}

{% page-ref page="date-picker-control-settings.md" %}

{% page-ref page="submit-button-control-settings.md" %}

{% page-ref page="page-navigation-button-control-settings.md" %}

{% page-ref page="multi-column-button-control-settings.md" %}

{% page-ref page="record-list-control-settings.md" %}

{% page-ref page="image-control-settings.md" %}

{% page-ref page="file-upload-control-settings.md" %}

{% page-ref page="file-download-control-settings.md" %}

{% page-ref page="expression-syntax-components-for-show-if-control-settings.md" %}
