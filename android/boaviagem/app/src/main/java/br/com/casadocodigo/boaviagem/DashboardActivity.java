package br.com.casadocodigo.boaviagem;

import android.app.Activity;
import android.os.Bundle;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;

/**
 * Created by ramon on 8/28/16.
 */
public class DashboardActivity extends Activity{
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.dashboard);
    }

    public void selectOption(View view){
        TextView textView = (TextView) view;
        String option = "Opção: " + textView.getText().toString();
        Toast.makeText(this, option, Toast.LENGTH_LONG).show();
    }

}
