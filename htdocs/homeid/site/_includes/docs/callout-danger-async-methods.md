{% capture callout %}
#### Asynchronous methods and transitions

All API methods are **asynchronous** and start a **transition**. They return to the caller as soon as the transition is started but **before it ends**. In addition, a method call on a **transitioning component will be ignored**.

[See our JavaScript documentation for more information](https://getbootstrap.com/docs/4.5/getting-started/javascript/).
{% endcapture %}
{% include docs/callout.html content=callout type="danger" %}
