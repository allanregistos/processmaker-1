---
description: Add a control that displays plain or bold-formatted text.
---

# Text Box Control Settings

## Control Description

The Text Box control adds a text field that displays plain or bold-formatted text.

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
4. Drag the **Text Box** icon ![](../../../../.gitbook/assets/text-control-screens-builder-processes.png) from the **Controls** panel anywhere within the ProcessMaker Screen canvas represented by the dotted-lined box. Existing controls on the ProcessMaker Screen canvas adjust positioning based on where you drag the control.
5. Place into the ProcessMaker Screen canvas where you want the control to display on the page.   

   ![](../../../../.gitbook/assets/text-control-placed-screens-builder-processes.png)

6. Configure the Text Box control. See [Inspector Settings](text-control-settings.md#inspector-settings).

Below is a Text Box control in Preview mode.

![Text Box control in Preview mode](../../../../.gitbook/assets/text-control-preview-screens-builder-processes.png)

## Delete the Control from a ProcessMaker Screen

{% hint style="warning" %}
Deleting a control also deletes configuration for that control. If you add another control, it will have default settings.
{% endhint %}

Click the **Delete** icon![](../../../../.gitbook/assets/delete-screen-control-screens-builder-processes.png)for the control to delete it.

## Inspector Settings

{% hint style="info" %}
### Don't Know What the Inspector Panel Is?

See [View the Inspector Panel](../view-the-inspector-pane.md).

### Permissions Required

Your user account or group membership must have the following permissions to edit a ProcessMaker Screen control:

* Screens: View Screens
* Screens: Edit Screens

See the ProcessMaker [Screens](../../../../processmaker-administration/permission-descriptions-for-users-and-groups.md#screens) permissions or ask your ProcessMaker Administrator for assistance.
{% endhint %}

Below are Inspector settings for the Text Box control:

* **Text Content:** Enter what text displays for the Text Box control. **New Text** is the default value. You can change what text will display.

  Also use the Text Box control to display the variable value of another control in the same or another ProcessMaker Screen. To do so, place between curly brackets the **Variable Value** setting value for the control from which you want to display its value. Example: `{FullName}`.

* **Font Weight:** Sets the weight of the text specified in the **Text Content** setting. **Normal** is the default option. You can change to **Bold**.
* **Text Horizontal Alignment:** Sets the text horizontal alignment. **Left** is the default option. Select one of the following options:
  * Center
  * Left
  * Right
  * Justify
* **Text Vertical Alignment:** Sets the text vertical alignment. **Top** is the default option. Select one of the following options:
  * Top
  * Middle
  * Bottom
* **Font Size:** Sets the size of the **Text Label** text in em units. **1** is the default option. Select one of the following options:
  * 1
  * 1.5
  * 2
* **Element Background Color:** Select to specify the background color of this control.
* **Text Color:** Select to specify the text color specified in the **Text Content** setting.
* **Visibility Rule:** Specify an expression that dictates the condition\(s\) under which this control displays. See [Expression Syntax Components for "Visibility Rule" Control Settings](expression-syntax-components-for-show-if-control-settings.md#expression-syntax-components-for-show-if-control-settings). If this setting does not have an expression, then this control displays by default.
* **CSS Selector Name:** Enter the value to represent this control in custom CSS syntax when in [Custom CSS](../add-custom-css-to-a-screen.md#add-custom-css-to-a-processmaker-screen) mode. As a best practice, use the same **CSS Selector Name** value on different controls to have the same custom CSS applied.

{% hint style="info" %}
Below are some ways to render Request data to display as text in a Text Box control:

* Use mustache template syntax to reference the Request data. Example: `Customer First Order Name: {{customer.orders.0.name}}`
* Include your own HTML syntax in the Text Box control along with template references. Example: `Customer First Name: <strong>{{customer.firstname}}</strong>`
{% endhint %}

## Related Topics

{% page-ref page="../types-for-screens.md" %}

{% page-ref page="../view-the-inspector-pane.md" %}

{% page-ref page="./" %}

{% page-ref page="rich-text-control-settings.md" %}

{% page-ref page="line-input-control-settings.md" %}

{% page-ref page="select-control-settings.md" %}

{% page-ref page="radio-group-control-settings.md" %}

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
