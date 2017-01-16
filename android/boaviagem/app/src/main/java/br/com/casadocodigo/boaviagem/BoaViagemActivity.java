package br.com.casadocodigo.boaviagem;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

/**
 * Created by ramon on 8/26/16.
 */
public class BoaViagemActivity extends Activity {
    private EditText username;
    private EditText password;

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.login);
        username = (EditText) findViewById(R.id.username);
        password = (EditText) findViewById(R.id.password);
    }

    public void loginOnClick(View v) {
        String informedUsername = username.getText().toString();
        String informedPassword = password.getText().toString();

        if ("leitor".equals(informedUsername) && "123".equals(informedPassword)) {
            "123".equals(informedPassword);
            startActivity(new Intent(this, DashboardActivity.class));
        } else {
            String errorMessage = getString(R.string.error_auth);
            Toast toast = Toast.makeText(this, errorMessage, Toast.LENGTH_SHORT);
            toast.show();
        }
    }
}
