## 2025-02-17 - [Contact Form Validation]
**Vulnerability:** Input data to the `ContactController` via `$request->all()` lacked explicit validation. Although `fillable` properties were defined on the model, injecting unrestricted data properties such as length could lead to potential vulnerabilities such as DoS risks due to extremely large payloads, or general malformed input bugs.
**Learning:** `ContactController` directly used `$request->all()` followed by `$newContact->fill($data)` without performing validations.
**Prevention:** Using `$request->validate()` for form fields (e.g. `required|string|max:255` and `email` checks) instead of `all()`.
